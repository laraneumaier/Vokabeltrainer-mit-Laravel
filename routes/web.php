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

Route::resource('lernsets.vocabs', VocabController::class);

/* index ($ country_id) - GET-Anfrage an / Länder / X / Städte
create ($ country_id) - GET-Anfrage an / Countries / X / Cities / Create
store ($ country_id, Request $ request) - POST-Anfrage an / Länder / X / Städte
show ($ country_id, City $ city) - GET-Anfrage an / Länder / X / Städte / Y.
edit ($ country_id, City $ city) - GET-Anfrage an / Länder / X / Städte / Y / bearbeiten
Update ($ country_id, Stadt $ Stadt, Anfrage $ Anfrage) - PUT-Anfrage an / Länder / X / Städte / Y.
destroy ($ country_id, City $ city) - Anfrage an / Länder / X / Städte / Y LÖSCHEN */



Route::get('/', function () {
    if (Auth::check()){
        return redirect('/home');
    } else{
        return view('welcome');
    }
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

