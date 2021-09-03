@extends('layouts.app')

@section('content')
    <div class="container sergiFix">
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

                    <div class="card">
                        <div class="card-header">Meals</div>
                        @forelse ($meals as $meal)
                            <div class="card-body">
                                <table>
                                    <tr>
                                        <th>Name:</th>
                                        <td>{{ $meal->name }}</td>
                                    </tr>
                                    <tr>
                                        <th>Category:</th>
                                        <td>{{ $meal->category->name }}</td>
                                    </tr>
                                    </tr>
                                    <tr>
                                        <th>Price:</th>
                                        <td>{{ $meal->price }}</td>
                                    </tr>
                                    </tr>
                                    <tr>
                                        <th>Description:</th>
                                        <td>{{ $meal->description }}</td>
                                    </tr>
                                    <tr>
                                        <th>Visit:</th>
                                        <td><a href="/meal/{{ $meal->id }}">Click Here</a></td>
                                    </tr>
                                    <tr>
                                        <th>Delete:</th>
                                        <td>
                                            {{-- {{ route('post.delete', $meal->id) }} --}}
                                            <a class="dropdown-item" href="{{ route('post.delete', $meal->id) }}"
                                                onclick="event.preventDefault();document.getElementById('delete-form-{{ $meal->id }}').submit();">
                                                {{ __('Delete') }}
                                            </a>
                                            <form id="delete-form-{{ $meal->id }}" +
                                                action="{{ route('post.delete', $meal->id) }}" method="post">
                                                @csrf @method('DELETE')
                                            </form>

                                        </td>
                                    </tr>

                                </table>
                            </div>

                        @empty
                            No Meals Avilable
                        @endforelse

                    </div>
                </div>
            </div>

        </div>
    </div>
    </div>
    </div>
@endsection
