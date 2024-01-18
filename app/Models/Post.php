<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    //yang diperbolehkan,yang lain tidak boleh
    // protected $fillable = ['tittle','excerpt','body']; 

    //yang tidak diperbolehkan, yang lain boleh
    protected $guarded = ['id']; 

    protected $with = ['author','category'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
