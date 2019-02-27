<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>



    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link rel="stylesheet" href="{{ asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/header.css')}}"/>
    <link rel="icon" type="image/png" href="{{asset('images/favicon.png')}}"/>

@stack('style')
<!-- Fonts -->

    {{--<link rel="stylesheet" id="font-stroke-css" href="{{ asset('css/font-stroke.css')}}" >--}}



        <title>@yield('title,home')</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="{{asset("css/header.css")}}" >
        <link rel="stylesheet" href="{{asset("css/font.css")}}" >
    </head>
<body>

@show


<header class="container-fluid">
    <nav class="navigation-mobile">
        <div class="d-flex justify-content-center pt-4"> <a href=""><img  src="{{asset('images/logo-Verticale.png')}}" width="60px" alt=""></a> </div>
        <div id="menuToggle">

            <input type="checkbox"/>

            <span></span>
            <span></span>
            <span></span>


            <div id="menu">
                <div class="flex-column-center menu-mobile">
                    <a class="pt-4" href=""><img src="{{asset('images/logo-Verticale.png')}}" width="60px" alt=""></a>

                    <ul class="nav navbar-right iconsize">
                        <li><i class="pe-7s-search"></i></li>
                        <li><i class="pe-7s-user"></i></li>
                        <li><i class="pe-7s-like"></i></li>
                        <li><i class="pe-7s-shopbag"></i></li>
                    </ul>
                    <ul class="list-unstyled my-5 ali">
                        <li class="border-bottom pb-2 mt-2"><a href="#">Home</a></li>
                        <li class="border-bottom pb-2 pt-2"><a href="#">Vêtements</a></li>
                        <li class="border-bottom pb-2 pt-2"><a href="#">Sous-vêtements</a></li>
                        <li class="border-bottom pb-2 pt-2"><a href="#">Accessoires</a></li>
                        <li class="border-bottom pb-2 pt-2"><a href="#">Goodies</a></li>
                        <li class="border-bottom pb-2 pt-2"><a href="#">Bundle</a></li>

                    </ul>
                    <i class="fa fa-facebook"></i>

                </div>
            </div>
        </div>
    </nav>
    <div class="wrapper">

        <nav id="navigation" class="container-fluid fixNavigation">
            <div class="container-fluid">
                <div class="navbar navbar-expand">

                    <a href=""><img src="{{asset('images/logo-Horizontal.png')}}" width="100px" alt=""></a>

                    {{--<div class="navbar-expand">--}}
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Vêtements</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Sous-vêtements</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Vêtements</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Goodies</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Bundle</a></li>
                    </ul>
                    {{--</div>--}}
                    <ul class="nav  navbar-right iconsize">
                        <li><i class="pe-7s-search pe-3x pe-va"></i></li>
                        <li><i class="pe-7s-user"></i></li>
                        <li><i class="pe-7s-like"></i></li>
                        <li><i class="pe-7s-shopbag"></i></li>
                    </ul>
                </div>
            </div>

        </nav>
</header>

    @yield('content')
</div>
</body>
</html>