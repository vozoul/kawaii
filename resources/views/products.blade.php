@extends('layout')
@section('content')
    {{--<h1>Categories</h1>--}}

    @foreach ($products as $product)
        <h2>{{ $product->name }}</h2>
        <article class="row col-sm-12 mb-2" >
            <div class="col-md-6 col-sm-12">
                <img src="{{ $product->image01 }}" alt="{{ $product->name }}">
            </div>
            <!-- Add to cart form-->
            <div class="d-flex flex-column-center col-md-6 col-sm-12 ">
                <h4> {{ $product->price }} €</h4>
                {{--<div class="input-box input_box mb-4 mt-2 " style="z-index: 10">--}}
                <select name="sizeselect" id="" class="btn text-center mb-4 col-9">

                    <option value="">Select a Size...</option>
                    <option value="3452" data-label="x-small" data-qty="31">X-Small</option>
                    <option value="3453" data-label="small" data-qty="111">Small</option>
                    <option value="3454" data-label="medium" data-qty="83">Medium</option>
                    <option value="3455" data-label="large" data-qty="55">Large</option>
                    <option value="3456" data-label="x-large" data-qty="23">X-Large</option>
                </select>
                <span class="btn bg-addtobag mx-auto text-white col-9">Add to Bag</span>
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
                    <p class="h6">{{ $product->description }}</p>


                    <h3>Caractéristiques</h3>
                    <p class="h6">{{ $product->feature }}</p>
                    <p class="h6">Guide des tailles <span class="pe-7s-scissors"></span></p>

                </div>

            </div>







            {{--<!-- Brand -->--}}
            {{--<div class="">--}}
            {{--<a href="" >For girls</a>--}}
            {{--</div>--}}
            {{--<div class="product-name">--}}
            {{--<h1 property="name">Cloudy Skies Puffer Jacket</h1>--}}
            {{--</div>--}}





        </article>

        <hr>
        {{--<p>{{ $product->name }}</p>--}}
        {{--<p>{{ $product->description }}</p>--}}
        {{--<p>{{ $product->categories->name }}</p>--}}
        {{--<hr>--}}
    @endforeach
@endsection
