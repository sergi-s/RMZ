@extends('layouts.app')
<style>
    .navbar{
     visibility: hidden;}
     .slider{
         margin-top: -80px;
     }
</style>
@section('content')
    <!-- <div class="container">
        <div class="row justify-content-center">
         -->
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
                                                            <a href="#">Order Now<span
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
                                                            <a href="#">Order Now<span
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
                                                            <a href="#">Order Now<span
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
            <div class="col-md-8">
                <div class="card">
                    @empty($OrderedItems)
                    @else
                        <div class="card-header">Ordered Items</div>
                        @foreach ($OrderedItems as $meal)
                            <div class="card-body">
                                <table>
                                    <tr>
                                        <th>Name:</th>
                                        <td>{{ $meal->name }}</td>
                                    </tr>
                                    <tr>
                                        <th>Chef Name:</th>
                                        <td><a href="chef/{{ $meal->chef->id }}"> {{ $meal->chef->name }}</a></td>
                                    </tr>
                                    <tr>
                                        <th>Category:</th>
                                        <td>{{ $meal->category->name }}</td>
                                    </tr>
                                    </tr>
                                    <tr>
                                        <th>Price:</th>
                                        <td>{{ $meal->price }}</td>
                                    </tr>
                                    </tr>
                                    <tr>
                                        <th>Description:</th>
                                        <td>{{ $meal->description }}</td>
                                    </tr>
                                    <tr>
                                        <th>Visit:</th>
                                        <td><a href="/meal/{{ $meal->id }}">Click Here</a></td>
                                    </tr>

                                </table>
                            </div>

                        @endforeach

                    @endempty
                </div>
                <div class="card">
                    <div class="card">
                        <div class="card-header">Meals</div>
                        @forelse ($meals as $meal)
                            <div class="card-body">
                                <table>
                                    <tr>
                                        <th>Name:</th>
                                        <td>{{ $meal->name }}</td>
                                    </tr>
                                    <tr>
                                        <th>Chef Name:</th>
                                        <td><a href="chef/{{ $meal->chef->id }}"> {{ $meal->chef->name }}</a></td>
                                    </tr>
                                    <tr>
                                        <th>Category:</th>
                                        <td>{{ $meal->category->name }}</td>
                                    </tr>
                                    </tr>
                                    <tr>
                                        <th>Price:</th>
                                        <td>{{ $meal->price }}</td>
                                    </tr>
                                    </tr>
                                    <tr>
                                        <th>Description:</th>
                                        <td>{{ $meal->description }}</td>
                                    </tr>
                                    <tr>
                                        <th>Visit:</th>
                                        <td><a href="/meal/{{ $meal->id }}">Click Here</a></td>
                                    </tr>
                                    <tr>
                                        <th>Add to cart:</th>
                                        <td>
                                            <p class="btn-holder"><a href="{{ route('add.to.cart', $meal->id) }}"
                                                    class="btn btn-warning btn-block text-center" role="button">Add to
                                                    cart</a> </p>
                                        </td>
                                    </tr>

                                </table>
                            </div>

                        @empty
                            No Meals Avilable
                        @endforelse

                    </div>
                </div>

                <div class="card">
                    <div class="card-header">{{ __('Chefs') }}</div>
                    @foreach ($chefs as $chef)
                        <div class="card-body">
                            <a href="chef/{{ $chef->id }}">{{ $chef->name }}</a><br>
                            yeas of experience: {{ $chef->chef->years_of_xp }} <br>
                            @if ($chef->chef->isVIP)
                                VIP
                            @endif<br>
                        </div>
                    @endforeach
                </div>
            </div>
            @if (Auth::check())
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
            @endif
        </div>
    </div>
@endsection