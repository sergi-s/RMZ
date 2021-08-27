@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Meals') }}</div>
                    @forelse ($meals as $meal)
                        <div class="card-body">


                            <table>
                                <tr>
                                    <th>Name:</th>
                                    <td>{{ $meal->name }}</td>
                                </tr>
                                @if ($meal->chef->isVIP)
                                    <tr>
                                        <th>VIP</th>
                                        <td>True</td>
                                    </tr>
                                @endif<br>
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

                    @empty
                        No Meals Avilable
                    @endforelse

                </div>
            </div>

        </div>

    </div>
    </div>
    </div>
    </div>
@endsection
