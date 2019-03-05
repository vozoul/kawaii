<?php
/**
 * Created by PhpStorm.
 * User: Utilisateur
 * Date: 27/02/2019
 * Time: 14:28
 */

namespace App\Http\Controllers;

use App\Address;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class AdressesController extends Controller
{
    public function index()
    {
        $adresses = Address::all();
        return view('adresses', ['adresses' => $adresses]);
    }

    public function sortByCity()
    {
        $adresses = Address::where('city', 'Annecy')->get();

        return view('adresses', ['adresses' => $adresses]);
    }

    public function orderByPostCode()
    {
        $adresses = Address::orderBy('postCode', 'asc')->get();

        return view('adresses', ['adresses' => $adresses]);
    }

    public function addAdress()
    {

        return view('addadress');
    }

    public function store()
    {
        $adress = new Address();

        $adress->street = request('street');
        $adress->postcode = request('postcode');
        $adress->city = request('city');
        $adress->country = request('country');
        $adress->complement = request('complement');

        $adress->save();
        return view('addadress');
    }

    public function selectOneToModif()
    {
        $id = request()->route('id');

        $adress = Address::where('id', $id)->get();

        return view('adressmodify', ['adress' => $adress]);

    }

    public function modify(){
        $id=request('id');
        Address::where('id', $id)->update(['street'=>request('street'),
            'postCode'=>request('postcode'),
            'city'=>request('city'),
            'country'=>request('country'),
            'complement'=>request('complement')
            ]);



        return redirect('adresses');
    }

    public function delete(){
        $id = request()->route('id');
        $adress=Address::where('id',$id);
        $adress->delete();

        return redirect('adresses');
    }

}