@extends('layout')
@section('title', 'users')
@section('content')
        @foreach($users as $user)
            <p>{{$user->name}}</p>
        @endforeach
@endsection