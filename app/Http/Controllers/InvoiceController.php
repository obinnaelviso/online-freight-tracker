<?php

namespace App\Http\Controllers;

use App\Mail\InvoiceCompletionMail;
use App\Models\Invoice;
use App\Models\TravelHistory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Symfony\Component\HttpFoundation\Response;

use PDF;

class InvoiceController extends Controller
{
    public function __construct() {
        $this->middleware('auth')->except(['show', 'track']);
    }

    public function index() {
        $invoices = Invoice::latest()->get();
        return view('admin.manage-invoices', compact('invoices'));
    }

    public function track(Request $request) {
        $invoice = Invoice::where('invoice_no', $request->invoice_no)->first();
        if ($invoice) {
            return response()->json(['id' => $invoice->invoice_no]);
        } else return response()->json(['message' => 'Track code not found. Please recheck your track code and try again!'], Response::HTTP_NOT_FOUND);
    }

    public function show(Invoice $invoice) {
        $histories = $invoice->histories;
        return view('track', compact('invoice', 'histories'));
    }

    public function exportPDF(Invoice $invoice) {
        view()->share('invoice', $invoice);
        $pdf_doc = PDF::loadView('export-invoice', $invoice);
        return $pdf_doc->download('invoice-'.$invoice->invoice_no.'.pdf');
    }

    public function previewPDF(Invoice $invoice) {
        view()->share('invoice', $invoice);
        $pdf_doc = PDF::loadView('export-invoice', $invoice);
        return $pdf_doc->stream('invoice-'.$invoice->invoice_no.'.pdf');
    }

    public function create() {
        $invoice = new Invoice;
        return view('admin.create-invoices', compact('invoice'));
    }

    public function new(Request $request) {
        $this->validate(request(), [
            'invoice_no' => 'required',
            'email' => 'required|email']
        );
        Invoice::create($request->all());
        return back()->with('success', 'Invoice Added Successfully!');
    }

    public function edit(Invoice $invoice) {
        return view('admin.create-invoices', compact('invoice'));
    }

    public function update(Invoice $invoice, Request $request) {
        $this->validate(request(), [
            'invoice_no' => 'required',
            'email' => 'required|email']);
        $invoice->update($request->all());
        return back()->with('success', 'Invoice Updated Successfully!');
    }

    public function histories(Invoice $invoice) {
        $histories = $invoice->histories;
        return view('admin.manage-travel-history', compact('invoice', 'histories'));
    }
    public function addHistory(Invoice $invoice, Request $request) {
        $invoice->histories()->create($request->all());
            // return response($request->all());
        return response()->json([
            'message' => 'Travel history added successfully!'
        ]);
    }
    public function deleteHistory(TravelHistory $history) {
        $history->delete();
        return response()->json([
            'message' => 'Travel history deleted successfully!'
        ]);
    }

    public function markComplete(Invoice $invoice) {
        if (!$invoice->email) {
            return back()->with('danger', 'This invoice does not have an email address, please edit invoice and add the receiver email address to the field and then try again');
        }
        $invoice->status_id = 1;
        $invoice->progress = 100;
        $invoice->save();
        try {
            Mail::to($invoice->email)->send(new InvoiceCompletionMail($invoice));
        } catch (\Exception $e) {
            // dd($e->getMessage());
            return back()->with('danger', 'Email could not be sent, please try again later');
        }
        return back()->with('success', 'Invoice marked as completed!');
    }
}
