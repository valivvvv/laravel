<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Repositories\Posts;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);
    }

    public function index(Posts $posts)
    {
        $posts = $posts->all(); // Making use of use App\Repositories\Posts; just for learning

    	// $posts = Post::latest()
     //        ->filter(request(['month', 'year']))
     //        ->get();

    	return view('posts.index', compact('posts'));
    }

    public function show(Post $post)
    {
    	return view('posts.show', compact('post'));
    }

    public function create()
    {
    	return view('posts.create');
    }

    public function store()
    {
    	$this->validate(request(), [
    		'title' => 'required',
    		'body'	=> 'required',
    	]);

    	/*Post::create([
    		'title' => request('title'),
    		'body'	=> request('body'),
            'user_id' => auth()->id(),
    	]);*/

        auth()->user()->publish(
            new Post(request(['title', 'body']))
        );

    	return redirect('/');
    }
}
