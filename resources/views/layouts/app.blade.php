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
    <!-- links -->

    {{-- better buttons --}}
    {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css"> --}}

    {{-- for icons --}}
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    {{-- Jquery --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    {{-- have no idea --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <!-- Styles -->

    {{-- Template --}}
    <link rel="stylesheet" href="{{ asset('css/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/assets/font/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('css/assets/css/plugins/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/assets/css/style.css') }}" />
</head>

<body>
    <div id="app">
        <header>
            <div class="main-nav">
                <div class="container">
                    <div class="row">
                        <div class="menu-toggle"></div>
                        <div class="logo">
                            <a href="{{ route('home') }}">
                                <img src="{{ asset('css/assets/images/logo/logo.png') }}" />
                            </a>
                        </div>
                        <div class="my-nav">

                            <div class="menu">
                                <ul>
                                    <li><a href="{{ route('aboutus') }}">About Us</a></li>
                                    <li><a href="{{ route('home') }}#our-menu">Our Meals</a></li>
                                    <li><a href="{{ route('home') }}#blog">News</a></li>
                                    <li><a href="{{ route('aboutus') }}">Contact Us</a></li>
                                    <li><a href="{{ route('chefs') }}">Chefs</a></li>
                                </ul>
                            </div>
                            @guest
                                @if (Route::has('login'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                    </li>
                                @endif

                                @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a class="nav-link"
                                            href="{{ route('register') }}">{{ __('Register') }}</a>
                                    </li>
                                @endif
                            @else

                                <button type="button" class="btn btn-warning" data-toggle="dropdown">
                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i> Cart <span
                                        class="badge badge-pill badge-danger">{{ count((array) session('cart')) }}</span>
                                </button>
                                <div class="dropdown-menu">
                                    <div class="row total-header-section">
                                        <div class="col-lg-6 col-sm-6 col-6">
                                            <i class="fa fa-shopping-cart" aria-hidden="true"></i> <span
                                                class="badge badge-pill badge-danger">{{ count((array) session('cart')) }}</span>
                                        </div>
                                        @php $total = 0 @endphp
                                        @foreach ((array) session('cart') as $id => $details)
                                            @php $total += $details['price'] * $details['quantity'] @endphp
                                        @endforeach
                                        <div class="col-lg-6 col-sm-6 col-6 total-section text-right">
                                            <p>Total: <span class="text-info">$ {{ $total }}</span></p>
                                        </div>
                                    </div>
                                    @if (session('cart'))
                                        @foreach (session('cart') as $id => $details)
                                            <div class="row cart-detail">
                                                {{-- <div class="col-lg-4 col-sm-4 col-4 cart-detail-img">
                                                <img src="{{ $details['image'] }}" />
                                            </div> --}}
                                                <div class="col-lg-8 col-sm-8 col-8 cart-detail-product">
                                                    <p>{{ $details['name'] }}</p>
                                                    <span class="price text-info"> ${{ $details['price'] }}</span> <span
                                                        class="count">
                                                        Quantity:{{ $details['quantity'] }}</span>
                                                </div>
                                            </div>
                                        @endforeach
                                    @endif
                                    <div class="row">
                                        <div class="col-lg-12 col-sm-12 col-12 text-center checkout">
                                            <a href="{{ route('cart') }}" class="btn btn-primary btn-block">View all</a>
                                        </div>
                                    </div>
                                </div>

                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        <b style="font-size: 12px; color:black">{{ Auth::user()->name }}</b>

                                        @if (Auth::user()->avatar)
                                            @if (Auth::user()->isVIP) <div class="ribbon"><span>VIP Member</span></div> @endif
                                            <img class="image rounded-circle"
                                                src="{{ asset('/uploads/avatars/' . Auth::user()->avatar) }}"
                                                alt="profile_image"
                                                style="width: 50px;height: 50px; padding: 5px; margin: 0px; ">
                                        @endif
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('profile') }}">
                                            {{ __('Profile') }}
                                        </a>
                                        <a class="dropdown-item" href="{{ route('sub_chefs') }}">
                                            {{ __('Subscriptions') }}
                                        </a>

                                        @if (!Auth::user()->isVIP)

                                            <a class="dropdown-item" href="{{ route('vipform') }}"
                                                onclick="event.preventDefault();document.getElementById('vip-form').submit();">
                                                {{ __('Become VIP') }}
                                            </a>
                                            <form id="vip-form" action="{{ route('vipform') }}" method="get"
                                                class="d-none">
                                                @csrf
                                            </form>
                                        @else
                                            <a class="dropdown-item" href="{{ route('vip') }}"
                                                onclick="event.preventDefault();document.getElementById('vip-dashboard').submit();">
                                                {{ __('VIP dashboard') }}
                                            </a>
                                            <form id="vip-dashboard" action="{{ route('vip') }}" method="get"
                                                class="d-none">
                                                @csrf
                                            </form>
                                        @endif

                                        @if (!Auth::user()->isChef)

                                            <a class="dropdown-item" href="{{ route('chefform') }}"
                                                onclick="event.preventDefault();document.getElementById('chef-form').submit();">
                                                {{ __('Become A chef') }}
                                            </a>

                                            <form id="chef-form" action="{{ route('chefform') }}" method="get"
                                                class="d-none">
                                                @csrf
                                            </form>
                                        @else
                                            <a class="dropdown-item" href="{{ route('chefDashboard') }}"
                                                onclick="event.preventDefault();document.getElementById('chef-dashboard').submit();">
                                                {{ __('chef dashboard') }}
                                            </a>
                                            <form id="chef-dashboard" action="{{ route('chefDashboard') }}" method="get"
                                                class="d-none">
                                                @csrf
                                            </form>
                                        @endif

                                        @if (Auth::user()->isAdmin)
                                            <a class="dropdown-item" href="{{ route('admin') }}"
                                                onclick="event.preventDefault();document.getElementById('admin-dashboard').submit();">
                                                {{ __('Admin dashboard') }}
                                            </a>
                                            <form id="admin-dashboard" action="{{ route('admin') }}" method="get"
                                                class="d-none">
                                                @csrf
                                            </form>
                                        @endif
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                            class="d-none">
                                            @csrf
                                        </form>

                                    </div>
                                </li>
                            @endguest
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <main class="py-4">
            @include('layouts.flash-message')
            @yield('content')
        </main>
    </div>
    @include("layouts.footer")
</body>

<script src="{{ asset('css/assets/js/jquery-3.2.1.min.js') }}"></script>
<script src="{{ asset('css/assets/js/popper.min.js') }}"></script>
<script src="{{ asset('css/assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('css/assets/js/plugins/owl.carousel.min.js') }}"></script>
<script src="{{ asset('css/assets/js/script.js') }}"></script>

</html>
