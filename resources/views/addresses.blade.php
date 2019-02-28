@extends('layout')
@section('title', 'addresses')
@section('content')
<?php
foreach($addresses as $address){
    echo $address-> city;
    echo $address-> postCode;
}
?>
@endsection