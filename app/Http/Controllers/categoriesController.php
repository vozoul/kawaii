<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class CategoriesController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
//    public function viewCategoryName()
//    {
//        $catName = DB::select('select * from categories where id = ?',[1]);
//
//        //dd($catName);
//        return view('category', ['catNames' => $catName]);
//    }
    public function index()
    {
        $id = request()->route('id');

        if ($id) {
            $categories = Category::where('id', $id)->get();
        } else {
            $categories = Category::all();
        }
        return view('category', ['categories' => $categories]);
    }


    /**
     * Create form
     *
     */
    public function create()
    {
        return view('categories.create');
    }


    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function store()
    {
        $category = new Category();
        $category->name = request('name');
        $category->description = request('description');
        $category->save();
        $categories = Category::all();
        return view('categories.index', ['categories' => $categories = Category::all()]);
    }

    public function update()
    {
        $category = equest()->route('id');
        $category->name = request('name');
        $category->description = request('description');
        $category->save();

        return redirect(route('categories.index', ['category' => $category]));
    }
    public function delete()
    {

    }
}
