<?php

use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\SettingsController;
// use App\Mail\InvoiceCompletionMail;
// use App\Models\Invoice;
// use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// Route::get('/test-email/{invoice}', function(Invoice $invoice) {
//     Mail::to($invoice->email)->send(new InvoiceCompletionMail($invoice));
// });

Route::get('/', [IndexController::class, 'index'])->name('home');
Route::get('/about', [IndexController::class, 'about'])->name('about');
Route::get('/contact-us', [IndexController::class, 'contact'])->name('contact-us');
Route::post('/contact-us', [IndexController::class, 'mail']);

Route::post('/track', [InvoiceController::class, 'track']);
Route::get('/track/{invoice:invoice_no}', [InvoiceController::class, 'show']);
Route::get('/manage-invoices/{invoice}/export', [InvoiceController::class, 'exportPDF'])->name('invoices.export');
Route::get('/manage-invoices/{invoice}/complete', [InvoiceController::class, 'markComplete'])->name('invoices.complete');
Route::get('/manage-invoices/{invoice}/preview', [InvoiceController::class, 'previewPDF'])->name('invoices.preview');


Route::get('/manage-invoices', [InvoiceController::class, 'index'])->name('invoices.index');
Route::get('/manage-invoices/create', [InvoiceController::class, 'create'])->name('invoices.create');
Route::post('/manage-invoices/create', [InvoiceController::class, 'new']);
Route::get('/manage-invoices/{invoice}', [InvoiceController::class, 'edit'])->name('invoices.edit');
Route::put('/manage-invoices/{invoice}', [InvoiceController::class, 'update']);
Route::get('/manage-invoices/histories/{invoice}', [InvoiceController::class, 'histories'])->name('invoices.histories');
Route::post('/manage-invoices/histories/{invoice}', [InvoiceController::class, 'addHistory']);
Route::delete('/manage-invoices/histories/{history}', [InvoiceController::class, 'deleteHistory']);

Route::get('/settings', [SettingsController::class, 'index'])->name('settings.index');
Route::post('/settings/', [SettingsController::class, 'update'])->name('settings.update');

require __DIR__.'/auth.php';
