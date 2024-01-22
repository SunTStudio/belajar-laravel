<?php

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;


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

    

    return view('home',["tittle" => "Home","active" => 'about']);
});

Route::get('/about', function () {
    $data = [
        "tittle" => "About",
        "active" => 'about',
        "name" => "Mahsun",
        "email" => "Mahsun@gmail.com",
        "image" => "img/naruto.jpg",
    ];
    return view('about',$data);
});





Route::get('/blog', [PostController::class, 'index']);


Route::get('posts/{post:slug}', [PostController::class, 'show']);

Route::get('/categories', function(){
    return view('categories',[
        'tittle' => 'Post Categories',
        "active" => 'categories',
        'categories' => Category::all()
    ]);
});


Route::get('/author', function () {
    return view('author',[
        "active" => 'posts',
        'tittle' => 'Author',
        'user' => User::all()
    ]);
});

Route::get('/login', [LoginController::class, 'index']);


Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);

