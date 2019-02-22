
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">

    <meta name="description" content="Le site du kawaii made in Japan!">
    <meta name="author" content="VVICA">

    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/footerdesign.css')}}">

    <title>Cherii - @yield('title')</title>

</head>

<body>
@include('header')
{{--@section('header')--}}
    {{--<div>--}}
        {{--<img src="{{asset('img/logo-Horizontal.png')}}" width="90ph" height="50px" alt="Cherii Logo">--}}
        {{--<p><link href="">Home</p>--}}
        {{--<p><link href="">Catalogue</p>--}}
        {{--<p><link href="">Panier</p>--}}
    {{--</div>--}}
{{--@show--}}
<div class="container">
    @yield('content')
</div>

    @include('footer')
</body>

</html>
