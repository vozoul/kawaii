
@extends('layout')
@section('title','productslist')
<link rel="stylesheet" href="{{asset('css/responsive.css')}}"/>


@section('content')

<!--    --><?php
//            echo "<div>";
//    foreach ($adresses as $adresse) {
//        echo "<p>$adresse->city</p>";
//        echo "<p>$adresse->postCode</p>";
//
//    }
//
//    echo "</div>";
//    ?>

    @foreach($adresses as $address)
        {{--{{dd($address['city'])}}--}}
        {{--<p>{{$address['city']}}</p>--}}
        {{--<p>{{$address['postCode']}}</p>--}}

        <p>{{$address->city}}</p>
        <p>{{$address->postCode}}</p>
        <form action="adresse/adressmodify/{{$address->id}}" method="get">
            {{csrf_field()}}
            <input type="submit" value="Modify">
        </form>
        <form action="adresse/{{$address->id}}" method="get">
            {{csrf_field()}}
            <input type="submit" value="Delete">
        </form>
    @endforeach
<h2><a href="adresse/addadress">Ajouter une adresse</a></h2>
@endsection