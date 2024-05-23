<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/* Route::get('/', function () {
    return view('welcome');
});


Route::view('/welcome','welcome');



Route::prefix('posts')->name('posts.')->group(function() {
    Route::get('/index',[HelloWorldController::class,'index'])->name('index');
    Route::get('/show/{post}',[HelloWorldController::class,'show'])->where(['post' => '[0-9]+'])->name('post.show');
}); */

Route::resource('/posts', PostController::class);