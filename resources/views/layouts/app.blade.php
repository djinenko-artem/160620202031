<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/default.css') }}" rel="stylesheet">
{{--    <link href="{{ asset('css/app.css') }}" rel="stylesheet">--}}
</head>
<body>
    <div class="cbc" id="app">
{{--        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">--}}
{{--            <div class="container">--}}
{{--                <a class="navbar-brand" href="{{ url('/') }}">--}}
{{--                    {{ config('app.name', 'Laravel') }}--}}
{{--                </a>--}}
{{--                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">--}}
{{--                    <span class="navbar-toggler-icon"></span>--}}
{{--                </button>--}}

{{--                <div class="collapse navbar-collapse" id="navbarSupportedContent">--}}
{{--                    <!-- Left Side Of Navbar -->--}}
{{--                    <ul class="navbar-nav mr-auto">--}}

{{--                    </ul>--}}

{{--                    <!-- Right Side Of Navbar -->--}}
{{--                    <ul class="navbar-nav ml-auto">--}}
{{--                        <!-- Authentication Links -->--}}
{{--                        @guest--}}
{{--                            <li class="nav-item">--}}
{{--                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>--}}
{{--                            </li>--}}
{{--                            @if (Route::has('register'))--}}
{{--                                <li class="nav-item">--}}
{{--                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>--}}
{{--                                </li>--}}
{{--                            @endif--}}
{{--                        @else--}}
{{--                            <li class="nav-item dropdown">--}}
{{--                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>--}}
{{--                                    {{ Auth::user()->name }} <span class="caret"></span>--}}
{{--                                </a>--}}

{{--                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">--}}
{{--                                    <a class="dropdown-item" href="{{ route('logout') }}"--}}
{{--                                       onclick="event.preventDefault();--}}
{{--                                                     document.getElementById('logout-form').submit();">--}}
{{--                                        {{ __('Logout') }}--}}
{{--                                    </a>--}}

{{--                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">--}}
{{--                                        @csrf--}}
{{--                                    </form>--}}
{{--                                </div>--}}
{{--                            </li>--}}
{{--                        @endguest--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </nav>--}}
        <header>
            <div class="center_box">
                <div class="wrapper">

                    <div class="logo_box">
                        <a href="index.html"><img src="/storage/img/logo.png" alt="foodclub"/></a>
                    </div>

                    <div class="lng_box">
                        <a href="#" class="flag_ar"></a>
                    </div>

                    <div class="orders_counter">
                        <span class="num">2<span class="line"></span></span>
                        <span class="num">1<span class="line"></span></span>
                        <span class="num">7<span class="line"></span></span>
                        <span class="num">0<span class="line"></span></span>

                        <span class="label">orders<br/>today</span>
                    </div>

                    <div class="r_box">
                        <a href="tel:8800117117" class="h_phone"><span class="ico"></span><span>800 117-117</span></a>

                        <div class="upan">
                            <div class="notice">
                                <a href="#" class="ico_notice nftoggle"></a>

                                <nav class="utnav">
                                    <ul>
                                        <li class="item">
                                            <span class="ico ico_1"></span>
                                            <div class="text_box">
                                                <h3>5 points</h3>
                                                <p>Thank you for visiting FoodClub.<br/>You got 5 more points on your
                                                    balance!</p>
                                            </div>
                                            <a href="#" class="gcross"></a>
                                        </li>
                                        <li class="item">
                                            <span class="ico ico_2"></span>
                                            <div class="text_box">
                                                <h3>5 points</h3>
                                                <p>Thank you for visiting FoodClub.<br/>You got 5 more points on your
                                                    balance!</p>
                                            </div>
                                            <a href="#" class="gcross"></a>
                                        </li>
                                        <li class="item">
                                            <span class="ico ico_3"></span>
                                            <div class="text_box">
                                                <h3>5 points</h3>
                                                <p>Thank you for visiting FoodClub.<br/>You got 5 more points on your
                                                    balance!</p>
                                            </div>
                                            <a href="#" class="gcross"></a>
                                        </li>
                                        <li><a href="#" class="more">Show more notifications</a></li>
                                    </ul>
                                </nav>
                            </div>
                            <div class="navbox">


                                    @guest
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                        </li>
                                        @if (Route::has('register'))
                                            <li class="nav-item">
                                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                            </li>
                                        @endif
                                    @else
                                        <li class="nav-item dropdown">
                                            <a href="#" class="midbox nftoggle">
                                                <img src="/storage/imgc/user_ava_1_40.jpg" alt=""/>
                                                <span class="warrd"></span>

                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                                <a class="dropdown-item" href="{{ route('logout') }}"
                                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                    {{ __('Logout') }}
                                                </a>

                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                    @csrf
                                                </form>
                                            </div>
                                        </li>
                                    @endguest
                                </a>
                                <nav class="utnav">
                                    <ul>
                                        <li class="points">600 points</li>
                                        <li class="sepor"></li>
                                        <li><a href="#">Profile</a></li>
                                        <li><a href="#">Orders</a></li>
                                        <li><a href="#">Address</a></li>
                                        <li><a href="#">Settings</a></li>
                                        <li class="sepor"></li>
                                        <li><a href="#" class="logout">Log Out</a></li>
                                    </ul>
                                </nav>

                                <!--
                                    <nav class="utnav">
                                        <ul>
                                            <li><a href="#">Menu</a></li>
                                            <li><a href="#">Orders</a></li>
                                            <li><a href="#">Reviews</a></li>
                                            <li><a href="#">Account Settings</a></li>
                                            <li><a href="#">Profile Settings</a></li>
                                            <li class="sepor"></li>
                                            <li><a href="#">Subway</a></li>
                                            <li><a href="#">McDonalds</a></li>
                                            <li class="sepor"></li>
                                            <li><a href="#"><span class="bplus"></span> Add Restaurant</a></li>
                                            <li class="sepor"></li>
                                            <li><a href="#" class="logout">Log Out</a></li>
                                        </ul>
                                    </nav>
                                 -->
                            </div>
                        </div>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
        </header>
        <main class="main">
            @yield('content')
        </main>
    </div>
</body>
</html>
