<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    protected $user;
    protected $post;

    public function __construct(User $user, Post $post)
    {
        $this->user = $user;
        $this->post = $post;
    }
    public function index()
    {
        // dd($this->user->find($userId));

        // if(!$user = $this->user->find($userId)) {
        //     return redirect()->back();
        // }
        // $posts = $user->posts()->get();
        $posts = $this->post->all();

        return view('posts.index', compact('posts'));
    }
}
