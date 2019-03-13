<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
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
        return view('products', ['products' => $products]);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function store(Request $request)
    {
        /**
         * @var Product
         */
        $product = new Product();

        $product->name = $request->get('name');
        $product->price = $request->get('price');

        for ($i = 1; $i < 4; $i++) {
            //$file = request()->file('picture0' . $i); Méthode procedurale
            $file = $request->file('picture0' . $i);
            if ($file != null) {
                $ext = $file->getClientOriginalExtension();
                $newName = strtolower(str_replace(" ", "_", $product->name) . "_0" . $i . "." . $ext);
                $file->move('images\\', $newName);

                switch ($i) {
                    case 1:
                        $product->image01 = 'images/' . $newName;
                        break;
                    case 2:
                        $product->image02 = 'images/' . $newName;
                        break;
                    case 3:
                        $product->image03 = 'images/' . $newName;
                        break;
                }
            }
        }
        $product->description = $request->get('description');
        $product->feature = request('feature');
        $product->save();
        $products = Product::all();
        return view('products', ['products' => $products]);
    }
    public function ProductsList()
    {
        $products = Product::all();
        return view('productsList', ['products' => $products]);
    }
    /**
     * Create form
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        $categories = Category::all();
        return view('create', ['categories' => $categories]);
    }

    public function edit($id)
{
    $products = Product::find($id);
    $categories = Category::all();
    //dd($products);
    return view('edit', ['products' => $products], ['categories' => $categories]);

}
    public function update($id)
    {
        $product = Product::find($id);

        $product->name = request('name');
        $product->price = request('price');

        for ($i = 1; $i < 4; $i++) {
            $file = request()->file('picture0' . $i);
            if ($file != null) {
                $ext = $file->getClientOriginalExtension();
                $newName = strtolower(str_replace(" ", "_", $product->name) . "_0" . $i . "." . $ext);
                $file->move('images\\', $newName);

                switch ($i) {
                    case 1:
                        $product->image01 = 'images/' . $newName;
                        break;
                    case 2:
                        $product->image02 = '/images/' . $newName;
                        break;
                    case 3:
                        $product->image03 = 'images/' . $newName;
                        break;
                }
            }
        }
        $product->description = request('description');
        $product->feature = request('feature');
        $product->save();

        $products = Product::all();

        return view('products', ['products' => $products]);
    }

  public function delete() {
        // used to choose elements display on view or not
        $all = true;
        // find a category object  referenced vy id parameter
        $products = Product::find(request()->route('id'));
        // delete Category object
        $products->delete();
        // Fetch all categories (array of Category object)
        $products = Product::all();

    // current used to choose current element of menu
    return redirect('/productsList');
    }
    public function DeleteYesOrNo ()
    {
        return view('delete', [
            'products' => Product::find(request()->route('id')),
        ]);
    }
}
