<?php
/**
 * Created by PhpStorm.
 * User: Utilisateur
 * Date: 27/02/2019
 * Time: 14:45
 */
namespace App\Http\Controllers;
use App\Category;
use App\Product;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
class ProductController extends PagesController
{

    /**
     * List Forms
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $id = request()->route('id');
        if ($id) {
            $products = Product::where('id', $id)->get();
        } else {
            $products = Product::all();
        }
        return view('products.index', ['products' => $products]);
    }

    /**
     * Create form
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        $categories = Category::all();
        return view('products.create', ['categories' => $categories, 'colors' => $colors]);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function store()
    {
        $product = new Product();
        $product->name = request('name');
        $product->description = request('description');
        $product->category_id = request('categories');
        $product->price = request('price');
        $product->picture = request('picture');

        $product->save();
        $products = Product::all();
        return view('products', ['products' => $products]);
    }
}

