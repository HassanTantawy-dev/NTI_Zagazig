<?php

namespace App\Http\Controllers;

use App\Models\Customer;

class CustomerController extends Controller
{
    // عرض كل الكاسترز
    public function index()
    {
        $customers = Customer::all();
        return view('customers.index', compact('customers'));
    }

    // عرض كاسترز من Cairo بس
    public function cairo()
    {
        $customers = Customer::where('customerCity', 'cairo')->get();
        return view('customers.cairo', compact('customers'));
    }
}
