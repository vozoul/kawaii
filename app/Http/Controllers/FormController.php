<?php
/**
 * Created by PhpStorm.
 * User: Utilisateur
 * Date: 04/03/2019
 * Time: 13:10
 */

namespace App\Http\Controllers;


class FormController extends Controller
{
    public function index() {
        return view('forms.index');
    }
    /**
     * Create form
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create($cat) {
        return view('forms.create', ['cat' => $cat]);
    }
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function store() {
        return view('forms.index',  ['title' => request('title'), 'description' => request('description')]);
    }
}