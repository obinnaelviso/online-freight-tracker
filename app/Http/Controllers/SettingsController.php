<?php

namespace App\Http\Controllers;

use App\Http\Traits\SettingsTrait;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    use SettingsTrait;

    public function __construct() {
        $this->middleware('auth');
    }

    public function index() {
        $settings = [
            Setting::PHONE => $this->getSetting(Setting::PHONE)->value,
            Setting::OFFICE_ADDRESS => $this->getSetting(Setting::OFFICE_ADDRESS)->value,
        ];
        return view('admin.settings', compact('settings'));
    }

    public function update(Request $request) {
        // Update Phone Number
        $this->updateSetting(Setting::PHONE, $request->phone);

        // Update Office Address
        $this->updateSetting(Setting::OFFICE_ADDRESS, $request->office_address);
        return back()->with('success', 'Settings updated successfully!');
    }
}
