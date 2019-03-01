<?php
/**
 * Created by PhpStorm.
 * User: Utilisateur
 * Date: 27/02/2019
 * Time: 14:45
 */
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
class ProductController extends PagesController
{
    public function viewProductPage()
    {
        $users = DB::select('select * from products');
        //dd($users);

        return view(["users"=>$users]);
    }
}
