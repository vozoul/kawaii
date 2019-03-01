@extends('layout')
@section('title','products')
@section('content')





    @foreach ($products as $product)

        {{--<ul>--}}

        {{--<li>{{ $product->name }}</li>--}}
        {{--<li>{{ $product->description }}</li>--}}
        {{--<li>{{ $product->price }}</li>--}}
        {{--<li>{{ $product->picture }}</li>--}}
        {{--<li><img src="{{ $product->picture }}" alt="{{ $product->name }}"></li>--}}

        {{--</ul>--}}
        <h1>Fiche produit</h1>
        <div class="row col-sm-12">
            <div class="col-md-6 col-sm-12">
                <img width="300px" src="{{ $product->picture }}" alt="{{ $product->name }}">
            </div>
            <!-- Add to cart form-->
            <div class="d-flex flex-column-center col-md-6 col-sm-12 ">
                {{--<div class="input-box input_box mb-4 mt-2 " style="z-index: 10">--}}
                <select name="sizeselect" id="" class="btn text-center mb-4 col-9">

                    <option value="">Select a Size...</option>
                    <option value="3452" price="0" data-label="x-small" data-qty="31">X-Small</option>
                    <option value="3453" price="0" data-label="small" data-qty="111">Small</option>
                    <option value="3454" price="0" data-label="medium" data-qty="83">Medium</option>
                    <option value="3455" price="0" data-label="large" data-qty="55">Large</option>
                    <option value="3456" price="0" data-label="x-large" data-qty="23">X-Large</option>
                </select>
                <span class="btn bg-addtobag col-9 mx-auto text-white ">Add to Bag</span>
                <!-- wish list and share-->
                <div class="mt-2 row col-9">
                    <p class="text-center col-6 "><span class="pe-7s-like"></span>
                        Add to whishlist
                    </p>
                    <p class="text-center border-left col-6"><span class=" pe-7s-share"></span>
                        Share
                    </p>
                </div>


                <div class="col-9">
                    <h3>Description</h3>
                    <p class="h6">Sugar Thrillz Cloudy Skies Puffer Jacket cuz it’s cloudy with a chance of star showers
                        bb. Stay floatin’ in this quilted puffer jacket that has a cloud print all ova, a hidden hood,
                        two zip pockets N’ a front zip closure.</p>


                    <h3>Caractéristiques</h3>
                    <p class="h6">100% Polyester Lining : 100% Polyester; Insulation: 100% Polyester.</p>
                    <p class="h6">Hand Wash Cold, Hang Dry</p>
                    <p class="h6">Guide des tailles <span class="pe-7s-scissors"></span></p>

                </div>

            </div>

            <!-- Brand -->
            <div class="">
                <a href="">For girls</a>
            </div>
            <div class="product-name">
                <h1 property="name">Cloudy Skies Puffer Jacket</h1>
            </div>

    @endforeach
@endsection
