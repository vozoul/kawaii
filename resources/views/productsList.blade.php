@extends('layout')
@section('title','productslist')
<link rel="stylesheet" href="{{asset('css/responsive.css')}}" />


@section('content')

    <div class="content">

        <p class='text-left my-2'>
            <a href='{{route('create.product')}}' class='btn btn-dark'>
                <i class='fas fa-book-open'></i> Créer un nouveau produit
            </a></p>
        @foreach($products as $product)
        <form method='post' action='/products/edit/{{$product->id}}'>
            @csrf
            <div class="card my-2">
                <div class="row py-2">
                    <div class="card-text pl-4 pr-2">
                        <img src="{{$product->image01}}" alt="" width="60" height="60">
                    </div>
                    <div class="card-text pl-4 pr-2">
                        <img src="{{$product->image02}}" alt="" width="60" height="60">
                    </div>
                    <div class="card-text col-6">
                        <div class="card-title">
                            <h4>{{ $product->name }}</h4>
                        </div>
                        <div class="card-text">
                            <p>{{ $product->description }}</p>
                        </div>
                    </div>
                    <div class="card-text ml-auto mr-0 my-auto">
                        <div class="card-title">
                            <div>

                                <h4>{{ $product->price }} €</h4>
                            </div>

                        </div>
                    </div>
                    <div class="card-text mr-4 ml-auto my-auto">
                        <p>
                            <button type='submit' class='btn btn-success rounded-circle' name='' value='Modifier' >M<i class='fas fa-times'></i></button>
                            <a href="{{action('ProductsController@DeleteYesOrNo',$product->id)}}" class='btn btn-danger rounded-circle'> X </a>  <i class='fas fa-times'></i></button>
                        </p>
                    </div>
                </div>
            </div>

        </form>
    </div>
    @endforeach

@endsection
