<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Meal;
use App\Models\Comment;

class CommentController extends Controller
{
    /**
     * Add a comment on a specific Meal Post
     * 
     * @return void
     */
    public function store(Request $request)
    {
        $comment = new Comment;

        $comment->comment = $request->comment;

        $comment->user()->associate($request->user());

        $meal = Meal::find($request->meal_id);

        $meal->comments()->save($comment);

        return back();
    }

    /**
     * Reply on a comment or on onther reply, on a specific Meal Post
     * 
     * @return void
     */
    public function replyStore(Request $request)
    {
        $reply = new Comment();

        $reply->comment = $request->get('comment');

        $reply->user()->associate($request->user());

        $reply->parent_id = $request->get('comment_id');

        $meal = Meal::find($request->get('meal_id'));

        $meal->comments()->save($reply);

        return back();
    }
}
