<?php
/**
 * Created by PhpStorm.
 * User: Utilisateur
 * Date: 27/02/2019
 * Time: 14:45
 */

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class ProductController extends PagesController
{


    public function viewProductPage()
    {
        $products = Product::all();
        return view('product', ['products' => $products]);

    }

    public function create()
    {
        return view('forms');
    }

    public function store()
    {
        $products = new Product();

        $products->name = request('name');
        $products->price = request('price');
        $image = request()->file('picture');
        $fullName = $image->getClientOriginalName();
        $image->move('images', $fullName);
        //save image
        $products->picture = 'images/' . $fullName;
        $products->description = request('description');
        $products->save();
        $products = Product::all();


        return view('product', ['products' => $products]);
    }

}