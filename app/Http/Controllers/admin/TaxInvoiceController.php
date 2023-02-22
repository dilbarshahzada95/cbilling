<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TaxInvoiceController extends Controller
{
    function index()
    {
        return view('admin.tax_invoice.index');
    }

    function manage_tax_invoice()
    {
        return view('admin.tax_invoice.manage_tax_invoice');
    }
}
