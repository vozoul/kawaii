@extends('layout')
@section('title','productslist')
<link rel="stylesheet" href="{{asset('css/responsive.css')}}" />


@section('content')

    <a class="btn btn-dark mb-3" href="{{action('ProductsController@create')}}">Créer un nouveau produit</a>
    <table class="table table-striped table-bordered table-sm col-md-8 center-div mb-5" cellspacing="0" width="100%">
        <thead>
        <tr>
            <th class="th-sm">NAME</th>
            <th class="th-sm">DESCRIPTION</th>
            <th class="th-sm">PRICE</th>
            <th class="th-sm">CARACTERISTIQUE</th>
            <th class="th-sm">iMAGE01</th>
            <th class="th-sm">IMAGE02</th>
            <th class="th-sm">IMAGE03</th>

        </tr>
        </thead>

        @foreach($products as $product)
            <tbody >
        <tr>
            <td>{{ $product->name }}</td>
            <td>{{ $product->description }}</td>
            <td>{{ $product->price }}</td>
            <td>{{ $product->feature }}</td>
            <td><img src="{{ $product->image01 }}" width="100px" alt="{{ $product->name }}"></td>
            <td><img src="{{ $product->image02 }}" width="100px" alt="{{ $product->name }}"></td>
            <td><img src="{{ $product->image03 }}" width="100px" alt="{{ $product->name }}"></td>
            <td class="row text-center"><a class="btn btn-info" href="{{action('ProductsController@edit', $product->id)}}">

                    <i class="fas fa-edit"></i>
                    editergit
                </a>

                <a class="btn btn-danger" href="{{action('ProductsController@delete', $product->id)}}">

                    delete

                </a>

            </td>


        </tr>

        </tbody>
            @endforeach
    </table>

@endsection
