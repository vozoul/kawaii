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

        $directoryName = strtolower(str_replace(" ", "_", $product->name));
        //$picture = request()->file('picture01');

        $product->image01 = self::storePicture($directoryName, request()->file('picture01'));
        $product->image02 = self::storePicture($directoryName, request()->file('picture02'));
        $product->image03 = self::storePicture($directoryName, request()->file('picture03'));

        $product->description = request('description');
        $product->feature = request('feature');
        $product->save();
        $products = Product::all();
        return view('products',  ['products' => $products]);
    }

    /**
     * @param $directory
     * @param $picture
     */
    private function storePicture($directory, $picture)
    {
        $fullName = $picture->getClientOriginalName();
        $picture->move('images\\'.$directory, $fullName);

        return 'images/'.$directory."/".$fullName;
    }




    /**
     * Create form
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create() {
        $categories = Category::all();
        return view('create', ['categories' => $categories]);
    }

}
