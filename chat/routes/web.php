<?php

use App\Http\Controllers\ChatController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', [ChatController::class, 'index'])->name('chat.index');
//
//Route::post('/comment/store', [ChatController::class, 'store'])->name('comment.store');
//Route::post('/reply/store', [CommentController::class, 'addReply'])->name('reply.store');
//Route::post('/validate', [ChatController::class, 'validateData'])->name('your.route.name');


Route::get('/', [MainController::class, 'index'])->name('index');
Route::post('/comment/store', [MainController::class, 'store'])->name('comment.store');
Route::post('/reply/store', [MainController::class, 'replyStore'])->name('reply.store');
