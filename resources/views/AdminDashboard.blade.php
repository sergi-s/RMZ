@extends('layouts.app')
@section('content')

    <div class="container sergiFix">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Unapproved Chefs</div>

                    @forelse ($unapproved_apps as $unapproved_app)
                        <div class="card-body">
                            Name: {{ $unapproved_app->user->name }} <br>
                            Work experience: {{ $unapproved_app->years_of_xp }} years <br>
                            <a href="{{ $unapproved_app->license }}" target="__blank">License</a>
                            <a href="approveChef/{{ $unapproved_app->id }}" s>Approve</a>
                            <a href="unapproveChef/{{ $unapproved_app->id }}" s>UnApprove (delete)</a>
                        </div>
                    @empty
                        No unapproved applications
                    @endforelse

                </div>
            </div>
        </div>
    </div>
@endsection
