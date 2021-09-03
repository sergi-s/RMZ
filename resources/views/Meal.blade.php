@extends('layouts.app')
<style>
    .display-comment .display-comment {
        margin-left: 40px
    }

</style>
@section('content')
    <div class="container sergiFix">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ $meal->chef->name }}</div>

                    <div class="card-body">


                        <table>
                            <tr>
                                <th>Name:</th>
                                <td>{{ $meal->name }}</td>
                            </tr>
                            @if ($meal->chef->isVIP)
                                <tr>
                                    <th>VIP</th>
                                    <td>True</td>
                                </tr>
                            @endif<br>
                            <tr>
                                <th>Chef Name:</th>
                                <td><a href="../chef/{{ $meal->chef->id }}"> {{ $meal->chef->name }}</a></td>
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
                                <th>Add to cart:</th>
                                <td>
                                    <p class="btn-holder"><a href="{{ route('add.to.cart', $meal->id) }}"
                                            class="btn btn-warning btn-block text-center" role="button">Add to
                                            cart</a> </p>
                                </td>
                            </tr>

                        </table>
                    </div>

                    <div class="card-body">
                        <h5>Display Comments</h5>

                        @include('replies', ['comments' => $meal->comments, 'meal_id' => $meal->id])
                        {{-- <ul>
                            @each('replies', $meal->comments, 'comments')
                        </ul> --}}

                        <hr />
                    </div>

                    <div class="card-body">
                        <h5>Leave a comment</h5>
                        <form method="post" action="{{ route('comment.add') }}">
                            @csrf
                            <div class="form-group">
                                <input type="text" name="comment" class="form-control" />
                                <input type="hidden" name="meal_id" value="{{ $meal->id }}" />
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-sm btn-outline-danger py-0" style="font-size: 0.8em;"
                                    value="Add Comment" />
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
