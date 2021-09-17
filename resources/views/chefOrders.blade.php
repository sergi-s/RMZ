@extends('layouts.app')

@section('content')
    <section class="slider">

        <div class=shape></div>
        <div class=shape-01> </div>
        <section class="bg-04 sergiFix">
            <div class="container">
                <div class="row justify-content-center">
                    <h3>Orders</h3>
                </div>
                <div class="row sergiFix">
                    <div class="col-12">
                        <div class="row">
                            @include('layouts.displayMeals', ['meals' => $orders,"delete"=>False])
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>
@endsection
