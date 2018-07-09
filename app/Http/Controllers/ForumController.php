<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Http\Requests\CreatePostRequest;


class ForumController extends Controller
{
	// have to log in to post a thread
	function __construct()
	{
		$this->middleware('auth');
	}
    //
    public function getPost()
    {
    		$categories = Category::all();

    		return view('pages.question', compact('categories'));
    }

    public function postQuestion(CreatePostRequest $request)
    {
       // dd($request['title']);
        $post = new Post();

        $post->category_id = $request['category'];
        $post->title = $request['title'];
        $post->body = $request['body'];
// Inserting
        $post->save();

        return redirect('/question/post');
//      return back()->withInput();
    }
}
