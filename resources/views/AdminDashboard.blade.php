@extends('layouts.app')
<style>
    .slider {
        margin-top: -80px;
    }

</style>
@section('content')
    <section class="slider">
        <div class="tomato"></div>
        <div class="leftimage"></div>
        <br>
        <br>
        @if (count($unapproved_apps) > 0)
            <div class="container sergiFix">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">Unapproved Chefs</div>

                            @forelse ($unapproved_apps as $unapproved_app)
                                <div class="card-body">
                                    Name: {{ $unapproved_app->user->name }} <br>
                                    Work experience: {{ $unapproved_app->years_of_xp }} years <br>
                                    <a href="{{ $unapproved_app->license }}" target="__blank">License</a><br>
                                    <a href="approveChef/{{ $unapproved_app->id }}" s>Approve</a><br>
                                    <a href="approveVIPChef/{{ $unapproved_app->id }}" s>approve As VIP Chef</a><br>
                                    <a href="unapproveChef/{{ $unapproved_app->id }}" s>UnApprove (delete)</a><br>
                                </div>
                            @empty
                                <div class="header">No unapproved applications</div>
                            @endforelse
                        </div>
                    </div>
                </div>
            </div>
        @endif<br>
        <br>
        <br>
        <br>
        <div class="container ">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-body">
                            <form method="post" action="{{ route('category.store') }}">
                                <div class="form-group">
                                    @csrf
                                    <label class="label">Category Name</label>
                                    <input type="text" name="name" class="form-control" required />
                                </div>
                                <div class="form-group">
                                    <input type="submit" class="btn btn-warning" value="Add Category" />
                                </div>
                            </form>
                        </div>
                    </div>
                    <br>
                    <table class="table meshtable">

                        <thead style="background-color: #ffc107">
                            <tr>
                                <th>Categories</th>
                                <th>Delete</th>
                            </tr>
                        </thead>

                        <tbody>
                            @forelse ($cats as $cat)
                                <tr>
                                    <th scope="row">{{ $cat->name }} ID: {{ $cat->id }}</th>
                                    <td>

                                        <a href="{{ route('category.delete', $cat->id) }}"
                                            onclick="event.preventDefault();document.getElementById('delete-category-{{ $cat->id }}').submit();">
                                            Delete</a>
                                        <form id="delete-category-{{ $cat->id }}"
                                            action="{{ route('category.delete', $cat->id) }}" method="post">
                                            @csrf @method('DELETE')
                                        </form>

                                    </td>
                                </tr>
                            @empty

                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
@endsection
