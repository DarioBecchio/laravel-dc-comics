<?php

use App\Http\Controllers\ComicsController;
use Illuminate\Support\Facades\Route;
use App\Models\Comics;
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

Route::get('/', function () {

    $comics = Comics::all();
    return view('welcome', compact('comics'));
    
})->name('home');

Route::get('/ourcompany', function () {
    return view('ourcompany');
})->name('ourcompany');

Route::get('/comics/{comic}', function ($title) {
    $house = Comics::findOrFail($title);
    return view('layouts.comic.show', compact('comic'));
})->name('guests.comics.show');

/*CRUD operations */

Route::resource('comics' , ComicsController::class);
