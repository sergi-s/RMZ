@extends('layouts.app')

@section('content')
    <div class="container sergiFix">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">

                    <div class="card-header">Create Post</div>
                    <div class="card-body">

                        <form method="post" action="{{ route('post.store') }}" enctype="multipart/form-data">
                            <div class="form-group">
                                @csrf
                                <label class="label">Meal Name: </label>
                                <input type="text" name="name" class="form-control" required />
                                <br>
                                <div class="custom-file">
                                    <input type="file" name="image" class="custom-file-input" required>
                                    <label class="custom-file-label" for="chooseFile">Choose Image</label>
                                </div>
                                <label class="label">Meal Price: </label>
                                <input type="text" name="price" class="form-control" required />

                                <label class="label">Meal Category: </label>
                                <select name="category_id" class="form-control">
                                    @forelse ($cats as $cat)
                                        <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                                    @empty

                                    @endforelse
                                </select>
                                <br>
                                <label class="label">Description: </label>
                                <textarea name="description" id="" cols="30" rows="1" class="form-control"></textarea>

                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-success" value="Create post" />
                            </div>
                        </form>
                    </div>



                </div>
            </div>

        </div>
        <section class="bg-04" id="our-menu">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="row">
                            @include('layouts.displayMeals', ['meals' => $meals,"delete"=>True])
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endsection
