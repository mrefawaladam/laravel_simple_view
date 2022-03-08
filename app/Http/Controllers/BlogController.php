<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        return view('pages.about.blog');
    }

    public function detail($keyword)
    {
        return view('pages.about.blog',compact('keyword'));
    }
}
