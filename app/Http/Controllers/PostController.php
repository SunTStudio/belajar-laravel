<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
class PostController extends Controller
{
    
    public function index(){
        
        // dd(request('search'));
        $tittle = '';
        if(request('category')){
            $category = Category::firstWhere('slug', request('category'));
            $tittle = ' in '. $category->name;
        }
        
        if(request('author')){
            $author = User::firstWhere('username', request('author'));
            $tittle = ' By '. $author->username;
        }

        return view('blog',[
        "tittle" => "All Posts" . $tittle,
        "active" => 'posts',
        "post" =>Post::latest()->filter(request(['search','category','author']))->paginate(7),
        "posts" => Post::latest()->filter(request(['search','category','author']))->paginate(7)->withQueryString(),
    ]); 
    }

    public function show(Post $post){
        return view('post',[
        "tittle" => "Single Post",
        "active" => 'posts',
        "post" => $post,
    ]);
    } 


}
