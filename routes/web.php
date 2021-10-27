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

    $array_comics = config("comics");
    // var_dump($array_comics);
    $data_comics = [
        'comics' => $array_comics
    ];
    
return view('home', $data_comics);

})-> name('homepage');

