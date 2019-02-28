<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class usersController extends Controller
{
    public function index(){
        $users = DB::select('select * from customers');
        return view('users', ['users' => $users]);
    }

    public function show(){

    }

    public function edit(){

    }

    public function delete(){

    }
}
