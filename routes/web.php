<?php

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

Auth::routes();



Route::middleware('auth')->group( function (){

    Route::get('/', function () {

        return view('welcome');
    });

    Route::get('/message', function () {

        return view('message');
    });

    Route::get('/user-all', function () {

        return \App\User::all();
    });

    Route::get('/message-all', function () {

        return \App\Message::all();
    });

    Route::post('/message', function () {
        $data = request()->all();
        $message = \App\Message::create($data);
        $user = \App\User::find($message->user_id);

        broadcast( new \App\Events\SendMessage($message,$user));
        return redirect('/message');
    });

});



Route::get('/home', 'HomeController@index')->name('home');
