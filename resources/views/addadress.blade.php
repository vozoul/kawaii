@extends('layout')
@section('title','addadress')

@section('content')
    <form action="addadress" method="post">
        {{csrf_field()}}
        <input type="text" placeholder="Street" required id="street" name="street">
        <input type="number" placeholder="PostCode" required id="postcode" name="postcode">
        <input type="text" placeholder="City" required id="city" name="city">
        <input type="text" placeholder="Country" required id="country" name="country">
        <input type="text" placeholder="Complement" id="complement" name="complement">
        <input type="submit">
    </form>
    {{--@foreach($adresses as $address)--}}
        {{--<p>{{$address->city}}</p>--}}
        {{--<p>{{$address->postCode}}</p>--}}
        {{--<form action="addadress" method="get">--}}
            {{--{{csrf_field()}}--}}
            {{--<input type="submit" value="Modify">--}}
        {{--</form>--}}
        {{--<form action="addadress" method="get">--}}
            {{--{{csrf_field()}}--}}
            {{--<input type="submit" value="Delete">--}}
        {{--</form>--}}
    {{--@endforeach--}}

@endsection