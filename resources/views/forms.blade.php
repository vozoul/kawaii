@extends('layout')
@section('title','forms')
/**
 * Created by PhpStorm.
 * User: Utilisateur
 * Date: 04/03/2019
 * Time: 09:58
 */

        <h1>New form</h1>



<form method="POST" action="/forms">

    {{ csrf_field() }}

    <div>
        <label for="name">Name : </label>
        <input type="text" name="name" id="name" placeholder="name of the new product">
        <label for="price">Price : </label>
        <input type="text" name="price" id="price" placeholder="price of the new product">

    </div>

    <div>
        <label for="description">Description : </label>
        <textarea type="text" name="description" id="description" placeholder="Form description"></textarea>
    </div>

    <div>
        <button type="submit">Create product</button>
    </div>
</form>


@endsection