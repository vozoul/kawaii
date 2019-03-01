@extends('layout')
@section('title', 'customer')
@push('style')
<link rel="stylesheet" type="text/css" href="{{asset('css/cherii.css')}}"/>
<link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
@endpush
@section('content')
    {{--{{dd($customers)}}--}}
    @foreach($customers as $customer)
        <h3>{{strtoupper($customer->name)}}</h3>
        <h4>{{$customer->firstName}}</h4>
        <h5>{{$customer->mail}}</h5>
    @endforeach

@endsection