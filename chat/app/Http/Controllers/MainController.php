<?php

namespace App\Http\Controllers;

use App\helpers\Telegram\Message\Error;
use App\Http\Requests\StoreRequest;
use App\Models\Comment;
use App\Models\User;

use Illuminate\Http\Request;

use DB;
//use Intervention\Image\ImageManagerStatic as Image;
use Intervention\Image\Facades\Image;
//use Intervention\Image;
class MainController extends Controller
{

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'not_regex:/^.+@.+$/i'],
            'email' => ['required', 'email'],
            'text' => ['required', 'not_regex:/^.+@.+$/i'],

        ]);

        $user = User::updateOrCreate([
            'email' => $request->input('email')
        ], [
            'name' => $request->input('name'),
        ]);

        $comment = new Comment();
        $comment->text = $request->input('text');
        $comment->user_id = $user->id;
        $comment->parent_id = 0;
        $comment->save();
        return redirect()->route('index')->with('success', 'Thank you for your message!');
    }

    public function replyStore(Request $request)
    {

        $request->validate([
            'name_reply' => ['required', 'not_regex:/^.+@.+$/i'],
            'email_reply' => ['required', 'email'],
            'text_reply' => ['required', 'not_regex:/^.+@.+$/i'],

        ]);

        $user = User::updateOrCreate([
            'email' => $request->input('email_reply')
        ], [
            'name' => $request->input('name_reply'),
        ]);

        $reply = new Comment();
        $reply->text = $request->input('text_reply');
        $reply->user_id = $user->id;
        $reply->parent_id = $request['comment_id'];
//        dd($reply);
        $reply->save();

        return redirect()->route('index')->with('success', 'Thank you for your message!');

    }

    public function index()
    {

        return view('layouts.app', [
            'comments' => Comment::where('parent_id', 0)->with('user')->paginate(2),

        ]);
    }
}
