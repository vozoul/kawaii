<?php

namespace App\Http\Controllers;

use App\Customer;
use DemeterChain\C;
use Illuminate\Http\Request;

class customerController extends Controller
{
    public function index(){

        $id = request()->route('id');
        isset($id)? $customers = Customer::where('id', $id)->get() : $customers = Customer::all();

        return view('customer', ['customers' => $customers]);
    }
}
