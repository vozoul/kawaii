@extends('layout')
@section('title', 'product')
@push('style')
    <link rel="stylesheet" href="{{asset('css/cherii.css')}}"/>
@endpush
@section('content')
    <h1>Fiche produit</h1>
    <div class="row col-sm-12" >
     <div class="col-md-6 col-sm-12">
         <img src="{{asset('images/panda-socks.jpg')}}" alt="panda-socks">
     </div>
        <!-- Add to cart form-->
        <div class="bg-warning col-md-6 col-sm-12 ">
            {{--<div class="input-box input_box mb-4 mt-2 " style="z-index: 10">--}}
                <select name="sizeselect" id="" class="selectpicker mb-4 w-100">

                    <option value="">Select a Size...</option>
                    <option value="3452" price="0" data-label="x-small" data-qty="31">X-Small</option>
                    <option value="3453" price="0" data-label="small" data-qty="111">Small</option>
                    <option value="3454" price="0" data-label="medium" data-qty="83">Medium</option>
                    <option value="3455" price="0" data-label="large" data-qty="55">Large</option>
                    <option value="3456" price="0" data-label="x-large" data-qty="23">X-Large</option>
                </select>
                <span class="btn bg-addtobag w-100 text-white ">Add to Bag</span>
                <!-- wish list and share-->
                <div class="row ">
                    <p class="col-6 pe-7s-like">
                       Add to whishlist
                    </p>
                    <p class="border-left col-6 pe-7s-share">
                        Share
                    </p>
                </div>

                </div>

                {{--<script>--}}
                    {{--jQuery("#attribute125").on("change", function(event) {--}}
                        {{--if(typeof window['selectedCartVersion'] !== 'undefined' && window['selectedCartVersion'] == 'newcart') {--}}
                            {{--if (typeof getChildProductValues === "function") { getChildProductValues(); }--}}
                            {{--eventCart(this);--}}
                        {{--} else {--}}
                            {{--eventCart(this);--}}
                        {{--}--}}
                    {{--} );--}}
                {{--</script>--}}
                {{--<div id="message_error_attribute125"></div>--}}

        {{--</div>--}}
        

    
    
    
    <!-- Brand -->
    <div class="">
        <a href="" >For girls</a>
    </div>
    <div class="product-name">
        <h1 property="name">Cloudy Skies Puffer Jacket</h1>
    </div>




    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <br><br><br><br><br><br><br><br>
@endsection
