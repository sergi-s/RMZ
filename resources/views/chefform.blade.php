@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <h1>Chef Form</h1>


                    <div class="card-body">
                        {{ $user->name }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
