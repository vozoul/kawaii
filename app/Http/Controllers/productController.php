<?php

namespace App\Http\Controllers;

use App\Customer;
use DemeterChain\C;
use Illuminate\Http\Request;

class productController extends Controller
{
    public function index(){
        $slug = request()->route('slug');
        isset($slug)? $products = Customer::where('slug', $slug)->get() : $products = Customer::all();
        return view('product', ['products' => $products]);
    }
}
