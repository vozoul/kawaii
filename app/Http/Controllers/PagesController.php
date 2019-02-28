<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function viewHomePage()
    {
     return view ('home');
    }
    public function viewListProductPage()
    {
        $arrayProduct = array
        (
            array ( "image"=> asset("images/61S1hqNrZoL._UX679_.jpg"), "name"=> 'Chaussettes longue', "price"=> 32),
            array ( "image"=> asset("images/61VKfLvAJ1L._UX679_.jpg"), "name"=> 'Robe butterfly', "price"=> 50),
            array ( "image"=> asset("images/téléchargement (3).jpg"), "name"=> 'Mitaines chat', "price"=> 12),
            array ( "image"=> asset("images/téléchargement.jpg"), "name"=> 'T-shirt sushi', "price"=> 24)
        );

        return view('listproducts',["arrayProduct"=>$arrayProduct]);

    }

    public function viewContactPage()
    {
        return view ('contact');
    }
    public function viewListBasket()
    {
        return view ('basket');
    }
    public function viewProduct()
    {
        return view ('product');
    }


}
