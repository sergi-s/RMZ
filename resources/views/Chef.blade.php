@extends('layouts.app')

@section('content')
    <div class="container sergiFix">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ $chef->name }}</div>

                    <div class="card-body">
                        yeas of experience: {{ $chef->chef->years_of_xp }} <br>

                        @if ($chef->isVIP)
                            VIP
                        @endif<br>
                        @if (!$subscribed)
                            <a href="../subscribe/{{ $chef->id }}">SUBSCRIBE</a>
                        @else
                            SUBSCRIBED
                        @endif

                    </div>

                </div>
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
                                <th>Add to cart:</th>
                                <td>
                                    <p class="btn-holder"><a href="{{ route('add.to.cart', $meal->id) }}"
                                            class="btn btn-warning btn-block text-center" role="button">Add to
                                            cart</a> </p>
                                </td>

                            </table>
                        </div>

                    @empty
                        No Meals Avilable
                    @endforelse

                </div>
            </div>
        </div>
    </div>
@endsection
