@extends('layout')
@section('title','adressmodify')

@section('content')

<form action="/adresse/adressmodify" method="post">
    {{csrf_field()}}
    @foreach($adress as $adresse)
        <input type="hidden" value="{{$adresse->id}}" name="id">
        <input type="text" value="{{$adresse->street}}" required id="street" name="street">
        <input type="number" value="{{$adresse->postCode}}" required id="postcode" name="postcode">
        <input type="text" value="{{$adresse->city}}" required id="city" name="city">
        <input type="text" value="{{$adresse->country}}" required id="country" name="country">
        <input type="text" value="{{$adresse->complement}}" id="complement" name="complement">
        <input type="submit">
    @endforeach
</form>
@endsection