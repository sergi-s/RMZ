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
                        <p> The process consists of a customer choosing the meal of their choice,
                            scanning the menu items, choosing an item, and finally choosing for delivery.
                            Payment is then administered by paying with a credit card or debit card through
                            website or in cash to the delivery</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="wrapper">
                        <div class="content">
                            <div class="icons">
                                <span class="flaticon-fish"></span>
                            </div>
                            <h3>Ordering Meals</h3>
                            <p>Giving our customers the ability to search, filter, select, and order what they desire to
                                eat,
                                online - On the website, effortlessly.
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
                            <h3>Reliable Communication</h3>
                            <p>Allow our customers to track their orders on your food ordering app
                                and keep them updated and satisfied with transparent orders statuses and details.
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
                            <p>Create a seamless online food ordering and delivery experience for our customers
                                & boost our ROI from your online food marketplace business.
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
                        <h2><a href="/meals">Discover More Best Meals</a></h2>
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
                        @include('layouts.displayMeals', ['meals' => $meals,"delete"=>False,"ordered"=>False])
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
                        <h2><a href="/chefs">Discover More Best Chefs</a></h2>
                        <p> We have the best talented well-known chefs around the world gathered here to produce the best
                            tasted meals foreve as we believe that everyone deserves to taste good
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
    <section class="bg-04" id="blog">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="heading">
                        <span>Best Updates</span>
                        <h2>Last Day Meals</h2>
                        <p>We review All new Chef meals, and choose the best for you, These are the Best meals in The last
                            Day, Enjoy your browsing. Lorem ipsum dolor sit amet consectetur
                        </p>
                    </div>
                </div>

                <div class="col-12">
                    <div class="row">
                        @include('layouts.displayMeals', ['meals' => $lastDay,"delete"=>False,"ordered"=>False])
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ----------------------------------------------------------------------------------------------------------------------------------  -->
@endsection
