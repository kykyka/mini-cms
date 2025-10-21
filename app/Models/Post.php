<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;

class Post extends Model
{
    use HasFactory;

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function author(){
        return $this->belongsTo(User::class);
    }

    public static function getByAuthor(int $id){
        $user = User::find($id);
        $posts = $user->posts;
        foreach($posts as $post){
            $post->category = $post->category;
        }

        return $posts;
    }


    
    public static function getById($postId, $userId = null){
        if (is_null($userId)){
            return Post::find($postId);
        } else {
            return Post::where('user_id', $userId)->where('id', $postId)->first();
        }
    }
}
