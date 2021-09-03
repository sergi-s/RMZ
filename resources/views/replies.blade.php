@foreach ($comments as $comment)
    <div class="display-comment">

        <p><img class="image rounded-circle" src="{{ asset('/uploads/avatars/' . $comment->user->avatar) }}"
                alt="profile_image" style="width: 50px;height: 50px; padding: 5px; margin: 0px; "></p>
                
        <strong>{{ $comment->user->name }}</strong>
        <p>{{ $comment->comment }}</p>
        <a href="" id="reply"></a>
        <form method="post" action="{{ route('reply.add') }}">
            @csrf
            <div class="form-group">
                <input type="text" name="comment" class="form-control" />
                <input type="hidden" name="meal_id" value="{{ $meal_id }}" />
                <input type="hidden" name="comment_id" value="{{ $comment->id }}" />
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-sm btn-outline-danger py-0" style="font-size: 0.8em;"
                    value="Reply" />
            </div>
        </form>
        @include('replies', ['comments' => $comment->replies])
    </div>
@endforeach
