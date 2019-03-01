<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function viewHomePage()
    {
        $id = request()->route('id');
        if ($id) {
            $products = Product::where('id', $id)->get();
        } else {
            $products = Product::all();
        }
        return view('home', ['products' =>$products]);
    }

    public function viewListProductPage()
    {
        return view('listproducts');
    }

    public function viewContactPage()
    {
        return view('contact');
    }

    public function viewListBasket()
    {
        return view('basket');
    }

    public function viewProduct()
    {
        return view('article');
    }

    public function viewRegister()
    {
        return view('register');
    }

}
