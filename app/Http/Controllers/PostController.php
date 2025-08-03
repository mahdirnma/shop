<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        $post = Post::all();
        return $post;
    }

    public function create()
    {
        return Post::create([
            'name'=>'lorem ipsum',
            'description'=>'lorem ipsum',
        ]);
    }
    public function category()
    {
        $post = Post::find(1);
        return $post->category;
    }

    public function createCategory()
    {
        $post = Post::find(1);
        $status=$post->category()->create([
            'name'=>'category 1',
            'description'=>'lorem ipsum',
        ]);
        if($status){
            return 'category created';
        }
    }

}
