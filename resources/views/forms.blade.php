@extends('layout')
@section('title','forms')
@push('style')
    <link rel="stylesheet" href="{{asset('css/cherii.css')}}"/>
@endpush
@section('content')
/**
 * Created by PhpStorm.
 * User: Utilisateur
 * Date: 04/03/2019
 * Time: 09:58
 */

        <h1>New form</h1>

<h2>Ajout de produit au catalogue</h2>
<form class="form-group method="POST" action="" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div>
        <label class="form-text" for="name">Name : </label>
        <input class="form-control" type="text" name="name" id="name" placeholder="name of the new product">
        <label class="form-text" for="price">Price : </label>
        <input class="form-control" type="text" name="price" id="price" placeholder="price of the new product">

    </div>
    <div>
         <label class="form-text" for="picture">image : </label>
        <input class="form-control" type="file" name="picture" id="picture" placeholder=" choose a product picture">
    </div>
    <div>
        <label class="form-text" for="description">Description : </label>
        <textarea class="form-text" type="text" name="description" id="description" placeholder="Form description"></textarea>
    </div>

    <div>
        <button class="btn btn-secondary mt-3 mb-5" type="submit">Create product</button>
    </div>
</form>

<h2>mettre à jour un produit du catalogue</h2>

<form class="form-group" action="/forms" method="POST" enctype="multipart/form-data">
    @method('PUT')
    {{ csrf_field() }}
    <div>
        <label for="name">product to update : </label>
        <select>@foreach($products as $product){
            <label  class="form-text" for="{{$product->name}}">Name : </label>
            <option   class="form-control" value="{{$product->name}}"  >{{$product->name}}</option>}
            @endforeach
        </select>

        <input  class="form-control" type="text" name="name" id="{{$product->name}}" placeholder="name of the update product">

        <label class="form-text" for="price">Price : </label>

        <input  class="form-control" type="text" name="price" id="{{$product->price}}"  placeholder="price of update product">

    </div>
    <div>
         <label class="form-text" for="picture">image : </label>
        <input  class="form-control" type="file" name="picture" id="{{$product->picture}}" value="{{$product->picture}}" placeholder=" choose a product picture">
    </div>
    <div>
        <label class="form-text" for="description">Description : </label>
        <textarea class="form-text" type="text" name="description" id="{{$product->description}}" placeholder="Form description"></textarea>
    </div>

    <div>
        <button class="btn btn-secondary mt-3 mb-5" type="submit" >Update a product</button>
    </div>
</form>


@endsection