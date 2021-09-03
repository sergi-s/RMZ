@extends('layouts.app')

@section('content')
    <div class="container sergiFix">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <h1>VIP Form</h1>
                    {{ $user->name }}
                    <form action="/vipmember" method="get">
                        <button type="submit">proceed with payment</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
