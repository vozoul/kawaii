@extends('layout')
@section('title','productslist')
<link rel="stylesheet" href="{{asset('css/responsive.css')}}" />


@section('content')

    @foreach ($categories as $catName)
        {{--<li> {{ $catName->id }} </li>--}}
        <h2> {{ $catName->name }} </h2>
        @endforeach


@endsection
