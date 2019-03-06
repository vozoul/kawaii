<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index() {
        $id = request()->route('id');
        if ($id) {
            $products = Product::where('id', $id)->get();
        } else {
            $products = Product::all();
        }
        return view('products',  ['products' => $products]);    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function store() {
        $product = new Product();
        $product->name = request('name');
        $product->price = request('price');

        $product->image01= request('image01');
        $product->image02= request('image02');
        $product->image03= request('image03');
        $product->description = request('description');
        $product->feature = request('feature');
        $product->save();
        $products = Product::all();
        return view('products',  ['products' => $products]);
    }
    public function addProduct() {
        return view('forms/create');
    }
    public function modifyProduct() {
        $id=request()->route('id');
        $product=Product::where('id',$id)->get();
        return view('forms/modify',['product'=>$product]);
    }
    public function modify() {
        $id=request('id');
       Product::where('id',$id)->update([
           'name'=>\request('name'),
           'price'=>request('price'),
           'description'=>request('description'),
           'feature'=>request('feature')
       ]);
        return redirect('products');
    }
    public function deleteProduct() {
        $id=request()->route('id');
        $product=Product::where('id',$id);
        $product->delete();
        return redirect('products');
    }
}
