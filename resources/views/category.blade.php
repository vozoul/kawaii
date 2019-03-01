@extends('layout')
@section('title','productslist')
<link rel="stylesheet" href="{{asset('css/responsive.css')}}" />


@section('content')

    @foreach ($categories as $category)
        <h2> {{ $category->name }} </h2>
        <p>{{ $category->description }} </p>
        @endforeach


@endsection
