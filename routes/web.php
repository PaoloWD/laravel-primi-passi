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
    $world="Hello World";
    return view('home', [
        "world"=>$world
    ]);
});

Route::get('/contatti', function(){
    return view('contatti');
});

Route::get('/chi_siamo', function(){
    $members = [
        "Paolo", "Giovanni", "Luca", "Maria"
    ];
    return view('chi_siamo', [
        "members"=>$members
    ]);
});