<?php

namespace JustPlayinGames\Blog;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;


class BlogPostController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Show a list of blog posts.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('blog');
    }
}
