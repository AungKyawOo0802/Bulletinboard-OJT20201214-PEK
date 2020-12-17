<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostListController extends Controller
{
    // public function detail(){
    //     return view('postLists.Postlist');
    // }

    public function detail( ){
        $posts = Post::latest()->paginate(5);

        return view('posts.Postlist',[
            'posts' => $posts
        ]);
    }

    public function add( ){
        return view('posts.add-post');
    }

    public function confirmPost(Request $request){
       return view('posts.create-post-confirmation',[
           'posts' => $request
       ]);
    }

}
