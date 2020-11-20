<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VocabController;
use App\Http\Controllers\LernsetController;


  

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
  
Route::resource('lernsets', LernsetController::class);
Route::resource('vocabs', VocabController::class);



Route::get('/', function () {
    if (Auth::check()){
        return redirect('/home');
    } else{
        return view('welcome');
    }
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

