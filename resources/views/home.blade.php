@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
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
