<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
class PostController extends Controller
{
    
    public function index(){
        
        // dd(request('search'));

        

        return view('blog',[
        "tittle" => "All Posts",
        "active" => 'posts',
        "post" =>Post::latest()->filter()->get(),
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
