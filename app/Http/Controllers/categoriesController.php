<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class categoriesController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function viewCategoryName()
    {
        $catName = DB::select('select * from categories where id = ?',[1]);

        //dd($catName);
        return view('category', ['catNames' => $catName]);
    }
















}
