@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Meals') }}</div>

                    @foreach ($meals as $meal)
                        <div class="card-body">
                            {{ $meal->price }}
                            {{ $meal->description }}
                            {{ $meal->chef->name }}
                            {{ $meal->category->name }}
                        </div>
                    @endforeach
                    {{-- <div class="card-header">{{ __('Dashboard') }}</div> --}}

                    {{-- <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div> --}}
                </div>
            </div>
        </div>
    </div>
@endsection
