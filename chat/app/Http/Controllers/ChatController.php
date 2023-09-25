<?php

namespace App\Http\Controllers;

use App\Models\ChatMessage;
use App\Models\Comment;
use Mews\Captcha\Captcha;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class ChatController extends Controller
{
    public function validateData(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'email' => 'required|email',
//            'home_page' => 'nullable|url',
            'text' => 'required|string',
            'captcha' => 'required|captcha', // Assuming you're using Laravel Captcha
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        // Process the comment and save it to the database

        return response()->json(['message' => 'Comment successfully validated and saved.']);

    }

    public function index()
    {

        return view('index', [
                'comments' => Comment::where('parent_id', 0)->with('user')->paginate(30),
            ]
        );
    }

    public function store(Request $request)
    {
//        dd(2);
//        $validator = Validator::make($request->all(), [
//            'name' => 'required',
//            'email' => 'required|email',
//            'text' => 'required',
////            'captcha' => 'required|captcha',
//        ]);

//        $request->validate([
//            'name' => 'required',
//            'email' => 'required|email',
//            'text' => 'required',
//            'captcha' => 'required|captcha',
//        ]);

        // Спроба знайти користувача за email, і створити, якщо не існує
        $user = User::firstOrNew(['email' => $request->email]);
        $user->name = $request->name;
        $user->home_page = $request->home_page;
        $user->save();

        // Створення і збереження коментаря
        $comment = new Comment;
        $comment->text = $request->text;
        $comment->user_id = $user->id;
        $comment->parent_id = 0;
        $comment->save();

        // Повернення виду зі списком коментарів
        return view('index', [
            'comments' => Comment::where('parent_id', 0)->with('user')->paginate(30),
        ]);
    }


}
