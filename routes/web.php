<?php

use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get("connexion/google/redirect", function(){
    return Socialite::driver('google')->redirect();
})->name("google.redirect");
Route::get("connexion/google/callback", function(){
     dd(Socialite::driver('google'));
});

Route::get("connexion/github/redirect", function(){
    return Socialite::driver('github')->redirect();
})->name("github.redirect");
Route::get("connexion/github/callback", function(){
     dd(Socialite::driver('github'));
});


Route::get("connexion/facebook/redirect", function(){
    return Socialite::driver('facebook')->redirect();
})->name("facebook.redirect");
Route::get("connexion/facebook/callback", function(){
    //  try {
        dd(Socialite::driver('facebook')->user());
    //  } catch (\Throwable $th) {
    //      dd($th);
    //  }
});