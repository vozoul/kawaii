<?php
/**
 * Created by PhpStorm.
 * User: Utilisateur
 * Date: 28/02/2019
 * Time: 09:37
 */

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

class AdressesController extends Controller
{
    public function viewAdresses()
    {
        $addresses = DB::select('select * from addresses');

        return view('addresses', ['addresses' => $addresses]);
    }
}