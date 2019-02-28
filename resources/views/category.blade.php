@extends('layout')
@section('title','productslist')
<link rel="stylesheet" href="{{asset('css/responsive.css')}}" />


@section('content')

    @foreach ($catNames as $catName)
        {{--<li> {{ $catName->id }} </li>--}}
        <h2> {{ $catName->category }} </h2>
        @endforeach


@endsection
