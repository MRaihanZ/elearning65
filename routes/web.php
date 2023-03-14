<?php

use Illuminate\Support\Facades\Route;

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
    return view('home', [
        "title" => "Home | E-Learning 65"
    ]);
});

Route::get('/lr/teacher', function () {
    return view('lr/teacher', [
        "title" => "LR | E-Learning 65"
    ]);
});

Route::get('/lr/student', function () {
    return view('lr/student', [
        "title" => "LR | E-Learning 65"
    ]);
});
