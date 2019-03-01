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
        return view('product',['products'=>$products]);

    }
    public function store()
    {
        $product = new Product();

        $product->name = request('name');
        $product->price = request('price');
        $product->picture = request('picture');
        $product->description = request('description');
    }

}