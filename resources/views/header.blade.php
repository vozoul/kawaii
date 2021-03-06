<header class="container-fluid">
    <nav class="pb-3 shadow bg-cherii navigation-mobile fixed-top">
        <div class="float-right position-relative mt-5">
            <i class="pe-7s-shopbag"></i>
        </div>
        <div class="d-flex justify-content-center pt-4">
            <a href=""><img  src="{{asset('images/logo-Verticale.png')}}" width="60px" alt=""></a>
        </div>

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
                        <li class="border-bottom pb-2 mt-2"><a href="/">Home</a></li>
                        <li class="border-bottom pb-2 pt-2"><a href="/categories/1">Vêtements</a></li>
                        <li class="border-bottom pb-2 pt-2"><a href="/categories/2">Sous-vêtements</a></li>
                        <li class="border-bottom pb-2 pt-2"><a href="/categories/3">Accessoires</a></li>
                        <li class="border-bottom pb-2 pt-2"><a href="/categories/4">Goodies</a></li>
                        <li class="border-bottom pb-2 pt-2"><a href="/categories/5">Bundle</a></li>

                    </ul>
                    <i class="fa fa-facebook"></i>

                </div>
            </div>
        </div>
    </nav>
    <div class="wrapper">

        <nav id="navigation" class="shadow bg-cherii container-fluid fixNavigation">
            <div class="container-fluid">
                <div class="bg-cherii navbar navbar-expand">

                <a href=""><img src="{{asset('images/logo-Horizontal.png')}}" width="100px" alt=""></a>

                {{--<div class="navbar-expand">--}}
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="/categories/1">Vêtements</a></li>
                        <li class="nav-item"><a class="nav-link" href="/categories/2">Sous-vêtements</a></li>
                        <li class="nav-item"><a class="nav-link" href="/categories/3">Accessoires</a></li>
                        <li class="nav-item"><a class="nav-link" href="/categories/4">Goodies</a></li>
                        <li class="nav-item"><a class="nav-link" href="/categories/5">Bundle</a></li>
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
