<?php

use App\Http\Controllers\PostController;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;
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

    

    return view('home',["tittle" => "Home"]);
});

Route::get('/about', function () {
    $data = [
        "tittle" => "About",
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

Route::get('/categories/{category:slug}', function(Category $category){
    return view('blog',[
        'tittle' =>"Post $category->name",
        'post' => $category->posts->load('category','author'),
        "active" => 'categories',
    ]);
});

Route::get('/author', function () {
    return view('author',[
        "active" => 'posts',
        'tittle' => 'Author',
        'user' => User::all()
    ]);
});

Route::get('/author/{author:username}', function (User $author) {
    return view('blog',[
        "active" => 'posts',
        'tittle' => "Post By $author->name",
        'post' => $author->posts->load('category','author'),
    ]);
});
