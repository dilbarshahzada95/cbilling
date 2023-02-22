<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// dashboard
Route::get('/admin/dashboard', [App\Http\Controllers\admin\DashboardController::class, 'index']);
// accounts
Route::get('/admin/accounts', [App\Http\Controllers\admin\AccountsController::class, 'index']);
// balance adjustment
Route::get('/admin/balance/adustment', [App\Http\Controllers\admin\AccountsController::class, 'balance_adjustment']);
// balance transfer
Route::get('/admin/balance/transfer', [App\Http\Controllers\admin\AccountsController::class, 'balance_transfer']);
// account transactions
Route::get('/admin/accounts/transaction/history', [App\Http\Controllers\admin\AccountsController::class, 'account_transactions_history']);
// authenthication
Route::get('/admin/authenthication/profile', [App\Http\Controllers\admin\AuthenthicationController::class, 'index']);
// payment
Route::get('/admin/payment/customer', [App\Http\Controllers\admin\PaymentController::class, 'index']);
Route::get('/admin/payment/customer/payment', [App\Http\Controllers\admin\PaymentController::class, 'create_customer_invoice']);
Route::get('/admin/payment/supplier', [App\Http\Controllers\admin\PaymentController::class, 'supplier']);
Route::get('/admin/payment/supplier/payment', [App\Http\Controllers\admin\PaymentController::class, 'create_supplier_invoice']);
// employee
Route::get('/admin/employee', [App\Http\Controllers\admin\EmployeeController::class, 'index']);
Route::get('/admin/employee/manage', [App\Http\Controllers\admin\EmployeeController::class, 'manage_employee']);
Route::get('/admin/employee/department', [App\Http\Controllers\admin\EmployeeController::class, 'department']);
// expense
Route::get('/admin/expense', [App\Http\Controllers\admin\ExpenseController::class, 'index']);
Route::get('/admin/expense/manage', [App\Http\Controllers\admin\ExpenseController::class, 'manage_expense']);
Route::get('/admin/expense/category', [App\Http\Controllers\admin\ExpenseController::class, 'expense_category']);
// tank
Route::get('/admin/tank', [App\Http\Controllers\admin\TankController::class, 'index']);
// sale
Route::get('/admin/sale', [App\Http\Controllers\admin\SaleController::class, 'index']);
Route::get('/admin/sale/manage', [App\Http\Controllers\admin\SaleController::class, 'manage_sale']);
// customer
Route::get('/admin/customer', [App\Http\Controllers\admin\CustomerController::class, 'index']);
Route::get('/admin/customer/manage', [App\Http\Controllers\admin\CustomerController::class, 'manage_customer']);
Route::get('/admin/customer/add/vehicle', [App\Http\Controllers\admin\CustomerController::class, 'add_vehicle']);
Route::get('/admin/customer/manage/vehicle', [App\Http\Controllers\admin\CustomerController::class, 'manage_vehicle']);
Route::get('/admin/customer/price/changing', [App\Http\Controllers\admin\CustomerController::class, 'price_changing']);
Route::get('/admin/customer/wise/tag', [App\Http\Controllers\admin\CustomerController::class, 'manage_tag']);
Route::get('/admin/customer/wise/tag/form', [App\Http\Controllers\admin\CustomerController::class, 'add_tag_form']);

// supplier
Route::get('/admin/supplier', [App\Http\Controllers\admin\SupplierController::class, 'index']);
Route::get('/admin/supplier/manage', [App\Http\Controllers\admin\SupplierController::class, 'manage_supplier']);

// tax invoice
Route::get('/admin/tax/invoice', [App\Http\Controllers\admin\TaxInvoiceController::class, 'index']);
Route::get('/admin/tax/invoice/manage', [App\Http\Controllers\admin\TaxInvoiceController::class, 'manage_tax_invoice']);

// purchase
Route::get('/admin/purchase', [App\Http\Controllers\admin\PurchaseController::class, 'index']);
Route::get('/admin/purchase/manage', [App\Http\Controllers\admin\PurchaseController::class, 'manage_purchase']);
// reports
Route::get('/admin/reports/transaction', [App\Http\Controllers\admin\ReportsController::class, 'transaction_report']);
Route::get('/admin/reports/profit/loss', [App\Http\Controllers\admin\ReportsController::class, 'profit_and_loss_report']);
Route::get('/admin/reports/balance/sheet', [App\Http\Controllers\admin\ReportsController::class, 'balance_sheet_report']);
Route::get('/admin/reports/expense', [App\Http\Controllers\admin\ReportsController::class, 'expense_report']);
Route::get('/admin/reports/stock', [App\Http\Controllers\admin\ReportsController::class, 'stock_report']);
Route::get('/admin/reports/ledger', [App\Http\Controllers\admin\ReportsController::class, 'ledger_report']);
Route::get('/admin/reports/cash/flow', [App\Http\Controllers\admin\ReportsController::class, 'cash_flow_report']);
Route::get('/admin/reports/payment', [App\Http\Controllers\admin\ReportsController::class, 'payment_report']);
Route::get('/admin/reports/discount', [App\Http\Controllers\admin\ReportsController::class, 'discount_report']);
Route::get('/admin/reports/tax', [App\Http\Controllers\admin\ReportsController::class, 'tax_report']);
Route::get('/admin/reports/purchase', [App\Http\Controllers\admin\ReportsController::class, 'purchase_report']);
Route::get('/admin/reports/due/payment', [App\Http\Controllers\admin\ReportsController::class, 'due_payment_report']);
Route::get('/admin/reports/ledger/preview', [App\Http\Controllers\admin\ReportsController::class, 'ledger_preview']);
