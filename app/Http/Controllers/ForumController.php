<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

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
}
