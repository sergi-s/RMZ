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
    <!-- --------------------------------------------INTRO ---------------------------------------------------------------------->
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
    <!-- -----------------------------------------------------------------------------------------------------------------  -->
    <!-- -----------------------------------------------------WORHING HOURS------------------------------------------------  -->
    <section class="bg-01">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-6">
                    <div class="wrapper">
                        <div class="content">
                            <div class="icon">
                                <span class="flaticon-clock"></span>
                            </div>
                            <div class="sentence">
                                <strong>Today 10:00 am-7:00 pm</strong>
                                <p>Working Hours</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-6">
                    <div class="wrapper">
                        <div class="content">
                            <div class="icon">
                                <span class="flaticon-call"></span>
                            </div>
                            <div class="sentence">
                                <strong>419-704-4407</strong>
                                <p>Call Online</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ------------------------------------------------------------------------------------------------------------------  -->
    <!-- -----------------------------------------------ABOUT US-------------------------------------------------------------  -->
    <section class="bg-02" id="about-us">
        <div class="shape-02"></div>
        <div class="shape-03"></div>
        <div class="shape-04"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="wrapper">
                        <div class="image">
                            <img src="{{ asset('css/assets/images/about.png') }}">
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="content">
                        <span>About</span>
                        <h2>FOOD IS IMPORTANT FOR OUR LIVES</h2>
                        <p>Best food requires fresh ingredients, and a good taste</p>

                        <p>Food is any substance consumed to provide nutritional support for an organism. Food is usually of
                            plant, animal or fungal origin, and contains essential nutrients, such as carbohydrates, fats,
                            proteins, vitamins, or minerals.</p>
                        <ol>
                            <li><a href="#">Learn More</a></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- -----------------------------------------------------------------------------------------------------------------------  -->
    <!-- -----------------------------------------------HOW IT WORKS-----------------------------------------------------------  -->
    <section class="bg-03">
        <div class="shape-05"></div>
        <div class="shape-06"></div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="heading">
                        <span>Work</span>
                        <h2>How It Works</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            Asperiores officiis explicabo blanditiis consequuntur fugit
                            fugiat, incidunt totam consectetur veritatis minus corporis
                            doloribus, qui maxime velit nesciunt, officia praesentium odit
                            facilis.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="wrapper">
                        <div class="content">
                            <div class="icons">
                                <span class="flaticon-fish"></span>
                            </div>
                            <h3>Pick Meals</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Asperiores officiis explicabo blanditiis consequuntur fugit
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="wrapper">
                        <div class="content">
                            <div class="icons">
                                <span class="flaticon-touch"></span>
                            </div>
                            <h3>choose How Often</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Asperiores officiis explicabo blanditiis consequuntur fugit
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="wrapper">
                        <div class="content">
                            <div class="icons">
                                <span class="flaticon-catering"></span>
                            </div>
                            <h3>Fast Deliveries</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Asperiores officiis explicabo blanditiis consequuntur fugit
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- --------------------------------------------------------------------------------------------------------------------------  -->
    <section class="bg-04" id="our-menu">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="heading">
                        <span>Meals</span>
                        <h2><a href="/meals">Explore Our Best Menu</a></h2>
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
                        @include('layouts.displayMeals', ['meals' => $meals,"delete"=>False])
                    </div>
                </div>
            </div>
        </div>
    </section>

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

        </div>
    </section>
    <!-- --------------------------------------------------------BEST UPDATES---------------------------------------------------------- -->
    <section class="bg-06" id="blog">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="heading">
                        <span>Best Updates</span>
                        <h2>Explore Our News</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            Asperiores officiis explicabo blanditiis consequuntur fugit
                            fugiat, incidunt totam consectetur veritatis minus corporis
                            doloribus, qui maxime velit nesciunt, officia praesentium odit
                            facilis.</p>
                    </div>
                </div>

                <div class="blog-main-card d-flex">
                    {{-- <article class="blog-sub">
                        <div class="blog-content">
                            <img src="assets/images/blog/1.jpg">
                        </div>
                        <div class="blog-content-section">
                            <div class="blo-content-title">
                                <h4>Possession so comparison inquietude he conviction </h4>
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Neque at numquam, asperiores
                                    aut
                                    praesentium
                                    facilis ratione! Voluptatibus neque dignissimos ipsa atque veniam sint omnis in
                                    blanditiis, nemo fugit
                                    animi assumenda.</p>
                            </div>
                            <div class="blog-admin">
                                <ol>
                                    <li><i class="fal fa-user-tie"></i> By Admin</li>
                                    <li><i class="fal fa-calendar-alt"></i> july 28, 2020</li>
                                </ol>
                            </div>
                        </div>
                    </article> --}}

                    @include('layouts.displayMeals', ['meals' => $lastDay,"delete"=>False])
                </div>
            </div>
        </div>
    </section>
    <!-- ----------------------------------------------------------------------------------------------------------------------------------  -->
@endsection
