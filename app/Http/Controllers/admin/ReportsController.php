<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ReportsController extends Controller
{
    function transaction_report()
    {
        return view('admin.reports.transaction_report');
    }
    function profit_and_loss_report()
    {
        return view('admin.reports.profit_and_loss_report');
    }
    function balance_sheet_report()
    {
        return view('admin.reports.balance_sheet_report');
    }
    function expense_report()
    {
        return view('admin.reports.expense_report');
    }
    function stock_report()
    {
        return view('admin.reports.stock_report');
    }
    function ledger_report()
    {
        return view('admin.reports.ledger_report');
    }
    function cash_flow_report()
    {
        return view('admin.reports.cash_flow_report');
    }
    function payment_report()
    {
        return view('admin.reports.payment_report');
    }
    function discount_report()
    {
        return view('admin.reports.discount_report');
    }
    function tax_report()
    {
        return view('admin.reports.tax_report');
    }
    function purchase_report()
    {
        return view('admin.reports.purchase_report');
    }
    function due_payment_report()
    {
        return view('admin.reports.due_payment_report');
    }
    function ledger_preview()
    {
        return view('admin.reports.ledger_preview');
    }
}
