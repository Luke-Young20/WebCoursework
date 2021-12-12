<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\PostController;
use App\Services\Twitter;
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

app()->singleton(Twitter::class, function ($app){
    return new Twitter('Secret Key');
});

Route::get('/exampleTwitter', [PostController::class, 'exampleTwitter']);


app()->singleton(Facebook::class, function ($app){
    return new Facebook('Secret Key124');
});

Route::get('/exampleFacebook', [PostController::class, 'exampleFacebook']);

/*
app()->singleton(Facebook::class, function ($app){
    return new Facebook('Secret Key Facebook');
});

Route::get('/exampleFacebook', [PostController::class, 'exampleFacebook']);
*/


Route::get('/', function () {
    return view('welcome');
});

Route::get('/postauthor/{author?}', function ($author = null) {
    return view ('author', ['author'=>$author]);
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


Route::get('/home', function () {
    return "This is the home page";
});

Route::get('/authors', [AuthorController::class, 'index']);
Route::get('/authors/{id}',[AuthorController::class, 'show']); 
Route::get('/posts', [PostController::class, 'index']) ->name('posts.index'); 
Route::get('/posts/create', [PostController::class, 'create']) ->name('posts.create')->middleware(['auth']);   
Route::post('/posts', [PostController::class, 'store']) ->name('posts.store'); 
#Route::get('/posts/{post}',[PostController::class, 'show']) ->name('posts.show'); 
Route::get('/posts/{id}',[PostController::class, 'show']) ->name('posts.show'); 
Route::delete('posts/{id}', [PostController::class, 'destroy']) ->name('posts.destroy')->middleware(['auth']);  

Route::get('/posts/{id}/secret', function() {
    return "you are currently logged in";
})->middleware(['auth']);

#Will only show if the user is logged in
Route::get('/secret', function() {
    return "secret";
})->middleware(['auth']);

Route::get('/home/{name}', function ($name) {
    return "This is $name's page";
});

Route::get('/home/{name}/{age}', function ($name, $age) {
    return "This is $name's page they are $age years old";
});
require __DIR__.'/auth.php';
