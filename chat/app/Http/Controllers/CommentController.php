<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class CommentController extends Controller
{

    public function addReply(Request $request)
    {
        dd(1);
        $validator = $request->validate([
            'name' => ['required', 'not_regex:/^.+@.+$/i'],
            'email' => ['required', 'email'],
            'text' => ['required', 'not_regex:/^.+@.+$/i'],
//            'g-recaptcha-response' => 'required|captcha',
            'captcha' => 'required|captcha',
        ]);

        $user = User::updateOrCreate([
            'email' => $request->input('email')
        ], [
            'name' => $request->input('name'),
            'home_page' => $request->input('home_page'),
        ]);


        $reply = new Comment();
        $reply->text = $request->input('text');
        $reply->user_id = $user->id;
        $reply->parent_id = $request->get('comment_id');

//        if ($request->hasFile('image')) {
//            $file = $request->file('image');
//            $path = \Storage::disk('public')->putFile('comments', $file);
//            $reply->image = $path;
//        }
        $reply->save();

        return redirect()->route('chat.index')->with('success', 'Thank you for your message!');


    }
}
