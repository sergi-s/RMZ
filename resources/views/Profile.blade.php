@extends('layouts.app')

@section('content')
    <div class="container sergiFix">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header" style="display: flex; background-color: #ff9106;">
                    <img class="image rounded-circle" src="{{ asset('/uploads/avatars/' . Auth::user()->avatar) }}"
                                alt="profile_image" style="width: 100px;height: 100px; padding: 5px; margin: 0px; border-radius: 50px; ">
                    <h1 style="padding-top: 10px; padding-left: 20px;">Hello {{ Auth::user()->name }}@if (Auth::user()->avatar)</h1>

                        @endif
                    </div>

                    <div class="card-body">
                        <table class="table">
                            <tr>
                                <th>
                                    Email
                                </th>
                                <td>{{ Auth::user()->email }}</td>
                            </tr>
                            <tr>
                                <th>Role</th>
                                <td>
                                    @if (Auth::user()->isChef)
                                        Chef
                                    @elseif(Auth::user()->isAdmin)
                                        Admin
                                    @else
                                        User
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <th>Joined At</th>
                                <td>{{ date('d-m-Y', strtotime(Auth::user()->created_at)) }}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @if (count($ordered_items) > 0)
        <section class="bg-04" id="our-menu">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="heading">
                            <span>Oredred Items</span>
                            <h2>Your order is on it's way</h2>
                            <p>
                                We have a great variety of the best popular
                                Chefs around the world that anyone could
                                imagine. Our Chefs are very skilled and talented
                            </p>
                        </div>

                    </div>
                    <div class="col-12">
                        <div class="row">
                            @include('layouts.displayMeals', ['meals' => $ordered_items,"delete"=>False])
                        </div>
                    </div>
                </div>
            </div>
        </section>

    @endif

    @if (count($sub_chefs) > 0)
        <section class="bg-05" id="team">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="heading">
                            <span>Subscriptions</span>
                            <h2>Chefs You have favorited</h2>
                            <p>
                                We have a great variety of the best popular
                                Chefs around the world that anyone could
                                imagine. Our Chefs are very skilled and talented
                            </p>
                        </div>
                    </div>
                    <div class="main-team-card d-flex">
                        @include('layouts.displayChefs',['chefs'=>$sub_chefs])
                    </div>
                </div>
            </div>
        </section>
    @endif
@endsection
