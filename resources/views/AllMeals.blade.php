@extends('layouts.app')

@section('content')

    <section class="bg-04 sergiFix">
        <div class="container">
            <div class="row">

                <div class="mx-auto pull-right">
                    <div class="___class_+?4___">
                        <form action="/meals" method="GET" role="search">

                            <div class="input-group">
                                <span class="input-group-btn mr-5 mt-1">
                                    <button class="btn btn-info" type="submit" title="Search projects">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                            class="bi bi-search" viewBox="0 0 16 16">
                                            <path
                                                d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                                        </svg>
                                    </button>
                                </span>

                                <select name="cat" class="form-control">
                                    <option value="">Select a Category</option>
                                    @forelse ($cats as $cat)
                                        <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                                    @empty

                                    @endforelse
                                </select>

                                <input type="text" class="form-control mr-2" name="term" placeholder="Search projects"
                                    id="term">
                                <a href="/meals" class=" mt-1">
                                    <span class="input-group-btn">
                                        <button class="btn btn-danger" type="button" title="Refresh page">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bootstrap-reboot" viewBox="0 0 16 16">
                                                <path d="M1.161 8a6.84 6.84 0 1 0 6.842-6.84.58.58 0 1 1 0-1.16 8 8 0 1 1-6.556 3.412l-.663-.577a.58.58 0 0 1 .227-.997l2.52-.69a.58.58 0 0 1 .728.633l-.332 2.592a.58.58 0 0 1-.956.364l-.643-.56A6.812 6.812 0 0 0 1.16 8z"/>
                                                <path d="M6.641 11.671V8.843h1.57l1.498 2.828h1.314L9.377 8.665c.897-.3 1.427-1.106 1.427-2.1 0-1.37-.943-2.246-2.456-2.246H5.5v7.352h1.141zm0-3.75V5.277h1.57c.881 0 1.416.499 1.416 1.32 0 .84-.504 1.324-1.386 1.324h-1.6z"/>
                                              </svg>
                                        </button>
                                    </span>
                                </a>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-12">
                    <div class="row">
                        @include('layouts.displayMeals', ['meals' => $meals,"delete"=>False])
                    </div>
                </div>
            </div>
        </div>

    @endsection
