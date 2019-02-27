@extends('layout')
@section('title','productslist')
<link rel="stylesheet" href="{{asset('css/responsive.css')}}"/>


@section('content')
    <?php
    foreach ($adresses as $adresse) {
        echo $adresse->city;

    }
    ?>


@endsection