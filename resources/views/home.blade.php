@extends('layouts.app')
<style>
    .navbar {
        visibility: hidden;
    }

    .slider {
        margin-top: -80px;
    }

</style>
@section('content')
    <!-- <div class="container">                                                                                                                                                        -->
    <section class="slider">

        <div class=shape></div>
        <div class=shape-01> </div>

        <div class="banner">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6 col-sm-12">
                                    <div class="wrapper">
                                        <div class="content">
                                            <h1>
                                                YOUR DELICIOUS, FRESH FOOD
                                                IS IN YOUR HANDS NOW
                                            </h1>
                                            <h5>
                                                You can order your amazing,
                                                delicious, and fantastic
                                                food whose taste and flavor
                                                will make you feel happy and
                                                over the moon ! It's not
                                                about eating, It's about
                                                tasting
                                            </h5>
                                            <ol>
                                                <li>
                                                    <a href="#our-menu">Order Now<span
                                                            class="flaticon-right-arrow"></span></a>
                                                </li>
                                            </ol>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6 col-sm-12">
                                    <div class="wrapper">
                                        <img src="{{ asset('css/assets/images/slider/slide-01.png') }}" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6 col-sm-12">
                                    <div class="wrapper">
                                        <div class="content">
                                            <h1>
                                                YOUR DELICIOUS, FRESH FOOD
                                                IS IN YOUR HANDS NOW
                                            </h1>
                                            <h5>
                                                You can order your amazing,
                                                delicious, and fantastic
                                                food whose taste and flavor
                                                will make you feel happy and
                                                over the moon ! It's not
                                                about eating, It's about
                                                tasting
                                            </h5>
                                            <ol>
                                                <li>
                                                    <a href="#our-menu">Order Now<span
                                                            class="flaticon-right-arrow"></span></a>
                                                </li>
                                            </ol>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6 col-sm-12">
                                    <div class="wrapper">
                                        <img src="{{ asset('css/assets/images/slider/slide-02.png') }}" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6 col-sm-12">
                                    <div class="wrapper">
                                        <div class="content">
                                            <h1>
                                                YOUR DELICIOUS, FRESH FOOD
                                                IS IN YOUR HANDS NOW
                                            </h1>
                                            <h5>
                                                You can order your amazing,
                                                delicious, and fantastic
                                                food whose taste and flavor
                                                will make you feel happy and
                                                over the moon ! It's not
                                                about eating, It's about
                                                tasting
                                            </h5>
                                            <ol>
                                                <li>
                                                    <a href="#our-menu">Order Now<span
                                                            class="flaticon-right-arrow"></span></a>
                                                </li>
                                            </ol>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6 col-sm-12">
                                    <div class="wrapper">
                                        <img src="{{ asset('css/assets/images/slider/slide-03.png') }}" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="bg-04" id="our-menu">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="heading">
                        <span>Meals</span>
                        <h2>Explore Our Best Menu</h2>
                        <p>
                            We have a great variety of the best popular
                            meals around the world that anyone could
                            imagine. Our meals are so delicious and
                            integrated
                        </p>
                    </div>
                </div>
                <div class="col-12">
                    <div class="row">
                        @include('layouts.displayMeals', ['meals' => $meals])
                    </div>
                </div>
            </div>
        </div>
    </section>



    @if (count($OrderedItems) > 0)
        <section class="bg-04" id="your-menu">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="heading">
                            <span>Ordered Items</span>
                            <h2>Your Meals</h2>
                            <p>
                                You have ordred this meals, and they are on your way
                            </p>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="row">
                            @include('layouts.displayMeals', ['meals' => $OrderedItems])
                        </div>
                    </div>
                </div>
            </div>
        </section>

    @endif



    <section class="bg-05" id="team">
        <div class="shape-03"></div>
        <div class="shape-04"></div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="heading">
                        <span>Team</span>
                        <h2>Explore Our Team</h2>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur
                            adipisicing elit. Asperiores officiis
                            explicabo blanditiis consequuntur fugit
                            fugiat, incidunt totam consectetur veritatis
                            minus corporis doloribus, qui maxime velit
                            nesciunt, officia praesentium odit facilis.
                        </p>
                    </div>
                </div>
                <div class="main-team-card d-flex">
                    @include('layouts.displayChefs',['chefs'=>$chefs])
                </div>
            </div>

            @if (Auth::check())
                <div class="row">
                    <div class="col-12">
                        <div class="heading">
                            <span>Subscriptions</span>
                            <h2>Subscribe to your favorite chefs</h2>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur
                                adipisicing elit. Asperiores officiis
                                explicabo blanditiis consequuntur fugit
                                fugiat, incidunt totam consectetur veritatis
                                minus corporis doloribus, qui maxime velit
                                nesciunt, officia praesentium odit facilis.
                            </p>
                        </div>
                    </div>
                    <div class="main-team-card d-flex">
                        @include('layouts.displayChefs',['chefs'=>$sub_chefs])
                    </div>
                </div>
            @endif

        </div>
    </section>
    {{-- @if (Auth::check())
        <div class="card">
            <div class="card-header">{{ __('Subscriptions') }}</div>
            @foreach ($sub_chefs as $chef)
                <div class="card-body">
                    <a href="chef/{{ $chef->id }}">{{ $chef->name }}</a><br>
                    yeas of experience: {{ $chef->chef->years_of_xp }} <br>
                    @if ($chef->chef->isVIP)
                        VIP
                    @endif<br>
                </div>
            @endforeach
        </div>
    @endif --}}
@endsection
