<?php
//jobsheet 2 (3-9-2025)


use Illuminate\Support\Facades\Route;
//no.1
Route::get('/hello', function () {
    return 'Hello World';
});
//no.2
Route::get('/world', function () {
    return 'World';
});
//no.6
Route::get('/selamat', function () {
    return 'Selamat Datang';
});
//no.7
Route::get('/about', function () {
    return 'NIM : 243107050007, Nama : Inayatun Zaimah Farmadiah';
});
//no.8
Route::get('/user/{name}', function ($name) {
    return 'Nama saya '.$name;
});
//no.11
Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
    return 'Pos ke- '.$postId.' Komentar ke- '.$commentId;
});
//no.13
Route::get('/articles/{id}', function ($id) {
    return 'Halaman artikel dengan ID '.$id;
});
//no.14
Route::get('/user/{name?}', function ($name=null) {
    return 'Nama saya '.$name;
});
//no.17
Route::get('/user/{name?}', function ($name='John') {
    return 'Nama saya '.$name;
});

// no. 4 prak 2
use App\Http\Controllers\WelcomeController;

Route::get('/hello', [WelcomeController::class, 'hello']);

// no.6 prak 2
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'index']);
Route::get('/about', [PageController::class, 'about']);
Route::get('/articles/{id}', [PageController::class, 'articles']);

// no.7 prak 2
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;

Route::get('/', HomeController::class);
Route::get('/about', AboutController::class);
Route::get('/articles/{id}', ArticleController::class);

// no.8 prak 2
use App\Http\Controllers\PhotoController; 
// Route::resource('photos', PhotoController::class); 
Route::resource('photos', PhotoController::class)->only([ 
'index', 'show' 
]); 
Route::resource('photos', PhotoController::class)->except([ 
'create', 'store', 'update', 'destroy' 
]);


// no.1 prak 3
// Route::get('/greeting', function () { 
//     return view('hello', ['name' => 'Naya']); 
// });
// no.2 prak 3
// Route::get('/greeting', function () { 
//     return view('blog.hello', ['name' => 'Naya']); 
// });
// no.3 prak 3
Route::get('/greeting', [WelcomeController::class, 'greeting']);

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

// Route::get('/', function () {
//     return view('welcome');
// });

