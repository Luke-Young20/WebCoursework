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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


Route::get('/home', function () {
    return "This is the home page";
});

Route::get('/home/{name}', function ($name) {
    return "This is $name's page";
});

Route::get('/home/{name}/{age}', function ($name, $age) {
    return "This is $name's page they are $age years old";
});
require __DIR__.'/auth.php';
