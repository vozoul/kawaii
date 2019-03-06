<?php
/**
 * Created by PhpStorm.
 * User: Utilisateur
 * Date: 01/03/2019
 * Time: 09:30
 */

namespace App\Http\Controllers;
use App\Category;
use Illuminate\Support\Facades\DB;

class CategoriesController extends PagesController
{
    public function index() {
        $id = request()->route('id');
        if ($id) {
            $categories = Category::where('id', $id)->get();
        } else {
            $categories = Category::all();
        }
        return view('category',  ['categories' => $categories]);    }
    /**
     * Create form
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create() {
        return view('categories.create');
    }
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function store() {
        $category = new Category();
        $category->name = request('name');
        $category->description = request('description');
        $category->save();
        $categories = Category::all();
        return view('categories.index',  ['categories' => $categories = Category::all()]);
    }

}