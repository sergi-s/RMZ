@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __($Title) }}</div>
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
        </div>
    </div>
@endsection
