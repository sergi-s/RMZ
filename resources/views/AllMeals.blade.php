@extends('layouts.app')

@section('content')

    <section class="bg-04 sergiFix">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="row">
                        @include('layouts.displayMeals', ['meals' => $meals])
                    </div>
                </div>
            </div>
        </div>
    @endsection
