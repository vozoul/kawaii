<?php
/**
 * Created by PhpStorm.
 * User: Utilisateur
 * Date: 04/03/2019
 * Time: 10:01
 */

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
class FormController extends ProductController
{
   public function viewForm()
   {
       $products = Product::all();
       return view('forms', ['products' => $products]);
   }

    public function update() {


        // used to choose elements display on view or not
        $all = false;
        // find a product object  referenced vy id parameter
        $products = Product::find(request()->route('id'));
        $products->name = request('name');
        $products->description = request('description');
        // save product object
        $products->save();
        // get an array of product object referenced by id parameter
        $products = Product::where('id', request()->route('id'))->get();
        // current used to choose current element of menu
        return view('forms.viewProductPage',  ['current' => 'products', 'products' => $products, 'all' => $all]);
    }



}