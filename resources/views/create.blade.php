@extends('layout')
@section('content')
    <h1>Ajouter un nouveau produit</h1>

    <form method="POST" action="/products" enctype="multipart/form-data">

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
                <input type="text" name="name" id="name" placeholder="Product name">
            </div>
        </div>

        <div class="row" style="margin-bottom:10px">
            <div class="col-md-2">
                <label for="picture01">Image 01 : </label>
            </div>
            <div class="col-md-2">
                <input type="file" name="picture01" id="picture01" placeholder="image 01">
            </div>
        </div>
        <div class="row" style="margin-bottom:10px">
            <div class="col-md-2">
                <label for="picture02">Image 02 : </label>
            </div>
            <div class="col-md-2">
                <input type="file" name="picture02" id="picture01" placeholder="image 02">
            </div>
        </div>
        <div class="row" style="margin-bottom:10px">
            <div class="col-md-2">
                <label for="picture03">Image 03 : </label>
            </div>
            <div class="col-md-2">
                <input type="file" name="picture03" id="picture03" placeholder="image 03">
            </div>
        </div>
        <div class="row" style="margin-bottom:10px">
            <div class="col-md-2">
                <label for="price">Prix : </label>
            </div>
            <div class="col-md-2">
                <input type="text" name="price" id="price" placeholder="Prix du produit">
            </div>
        </div>
        <div class="row" style="margin-bottom:10px">
            <div class="col-md-2">
                <label for="description">Description : </label>
            </div>
            <div class="col-md-2">
                <textarea type="text" name="description" placeholder="Product description"></textarea>
            </div>
        </div>
        <div class="row" style="margin-bottom:10px">
            <div class="col-md-2">
                <label for="feature">Caractéristique : </label>
            </div>
            <div class="col-md-2">
                <textarea type="text" name="feature" placeholder="Caracterstique"></textarea>
            </div>
        </div>
        <div class="row" style="margin-bottom:10px">
            <div class="col-md-4">
                <button type="submit">Créer le produit</button>
            </div>
        </div>
    </form>
@endsection
