@extends('layout')
@section('content')
    <h1>Modifier un produit</h1>

    <form method="POST" action="/products/{{ $products->id }}/update" enctype="multipart/form-data">

        {{ csrf_field() }}

        <div class="row" style="margin-bottom:10px">
            <div class="col-md-2">
                <label for="category">Catégorie : </label>
            </div>
            <div class="col-md-2">
                <select name="category" id="category">
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="row" style="margin-bottom:10px">
            <div class="col-md-2">
                <label for="name">Nom : </label>
            </div>
            <div class="col-md-2">
                <input type="text" name="name" id="name" value="{{ $products->name }}">
            </div>
        </div>

        <div class="row" style="margin-bottom:10px">
            <div class="col-md-2">
                <label for="picture01">Image 01 : </label>
            </div>
            <div class="col-md-2">
                <input type="text" name="picture01" id="picture01" value="{{$products->image01}}">
                <input type="file" name="picture01" id="picture01" placeholder="image 01" value="'images/01">
            </div>
        </div>
        <div class="row" style="margin-bottom:10px">
            <div class="col-md-2">
                <label for="picture02">Image 02 : </label>
            </div>
            <div class="col-md-2">
                <input type="text" name="picture02" id="picture02" value="{{$products->image02}}">
                <input type="file" name="picture02" id="picture02" placeholder="image 02" value="{{$products->image02}}">
            </div>
        </div>
        <div class="row" style="margin-bottom:10px">
            <div class="col-md-2">
                <label for="picture03">Image 03 : </label>
            </div>
            <div class="col-md-2">
                <input type="text" name="picture03" id="picture03"  value="{{$products->image03}}">
                <input type="file" name="picture03" id="picture03"  value="{{$products->image03}}">
            </div>
        </div>
        <div class="row" style="margin-bottom:10px">
            <div class="col-md-2">
                <label for="price">Prix : </label>
            </div>
            <div class="col-md-2">
                <input type="text" name="price" id="price"  value="{{$products->price}}">
            </div>
        </div>
        <div class="row" style="margin-bottom:10px">
            <div class="col-md-2">
                <label for="description">Description : </label>
            </div>
            <div class="col-2">
                <label>
                    <textarea type="text" name="description"  required >{{$products->description}}</textarea>
                </label>
            </div>
        </div>
        <div class="row" style="margin-bottom:10px">
            <div class="col-md-2">
                <label for="feature">Caractéristique : </label>
            </div>
            <div class="col-md-2">
                <label>
                    <textarea type="text" name="feature"  required >{{$products->feature}}</textarea>
                </label>

            </div>
        </div>
        <div class="row" style="margin-bottom:10px">
            <div class="col-md-4">
                <button class="btn m-2 badge-dark" type="submit">Modifier le produit</button>
                <a class="btn btn-primary" href="/products/{{ $products->id }}/delete" title="Delete product">Supprimer le produit</a>
            </div>
        </div>
    </form>
@endsection
