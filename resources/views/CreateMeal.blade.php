@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    {{-- <div class="card-header">{{ $chef->name }}</div> --}}

                    <div class="card-header">Create Post</div>
                    <div class="card-body">

                        @error('title')
                            {{-- <div class="alert alert-danger">{{ $message }}</div> --}}
                        @enderror

                        <form method="post" action="{{ route('post.store') }}">
                            <div class="form-group">
                                @csrf
                                <label class="label">Meal Name: </label>
                                <input type="text" name="name" class="form-control" required />
                                <label class="label">Meal Price: </label>
                                <input type="text" name="price" class="form-control" required />

                                <label class="label">Meal Category: </label>
                                <select name="category_id">
                                    @forelse ($cats as $cat)
                                        <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                                    @empty

                                    @endforelse
                                </select>
                                <label class="label">Description: </label>
                                <textarea name="description" id="" cols="30" rows="10"></textarea>

                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-success" value="Create post" />
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
