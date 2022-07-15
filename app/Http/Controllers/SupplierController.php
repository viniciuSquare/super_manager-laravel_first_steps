<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SupplierController extends Controller
{
    public function index() {
        $supplier = ['Suppier 1'];
        return view('app.supplier.index', compact('supplier') );
    }
}
