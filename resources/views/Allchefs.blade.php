@extends('layouts.app')

@section('content')
    {{-- <div class="container">
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
    </div> --}}
    <section class="bg-05" id="team">
        <div class="shape-03"></div>
        <div class="shape-04"></div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="heading">
                        <span>Your subscriptions</span>
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
@endsection
