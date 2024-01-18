<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

class Post 
{
    private static $blog_posts = 
    [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Berry Kurniawan",
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aspernatur dolore dicta dolores facilis delectus expedita vel nulla temporibus et libero excepturi maiores, mollitia quisquam deserunt odit cupiditate enim, dolorum ipsa."
    
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Gebw",
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aspernatur dolore dicta dolores facilis delectus expedita vel nulla temporibus et libero excepturi maiores, mollitia quisquam deserunt odit cupiditate enim, dolorum ipsa."
    
        ]
        ];

        public static function all() {
            return collect(self::$blog_posts);
        }

        public static function find($slug) {
            $posts = static::all();
            return $posts->firstWhere('slug', $slug);
        }
}
