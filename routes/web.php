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

Route::get('/', function () {

    $comics = config('dataCards');

    return view('home', [
        'cards' => $comics,
    ]);
})->name('home');


Route::get('/card/{id}', function($id){
    $comics = config('dataCards');

    if(is_numeric($id) && $id >= 0 && $id < count($comics)){
        $card = $comics[$id];
        // dump($card);
    } else{
        abort(404);
    }

    return view('card-info', [
        'card' => $card,
    ]);

})->name('card');


Route::get('/news', function () {
    return view('news');
})->name('news');


