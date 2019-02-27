<?php
/**
 * Created by PhpStorm.
 * User: Utilisateur
 * Date: 27/02/2019
 * Time: 14:28
 */

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class AdressesController extends Controller
{
    public function index()
    {
        $adresses = DB::select('select * from addresses');

        return view('adresses', ['adresses' => $adresses]);
    }
}