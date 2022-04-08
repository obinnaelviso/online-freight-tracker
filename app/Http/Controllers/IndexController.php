<?php

namespace App\Http\Controllers;

use App\Notifications\ContactUs;
use App\Notifications\ContactUsCallBack;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;

class IndexController extends Controller
{
    public function index() {
        return view('index');
    }

    public function about() {
        return view('about');
    }

    public function contact() {
        return view('contact-us');
    }

    public function mail(Request $request) {
        $this->validate(request(), [
            'name' => 'required',
            'subject' => 'required',
            'email' => 'required|email',
            'message' => 'required'
        ]);
        Notification::route('mail', config('mail.from.address'))->notify(new ContactUs($request->all()));
        Notification::route('mail', $request->email)->notify(new ContactUsCallBack);
        return back()->with('success', 'Message sent successfully!');
    }
}
