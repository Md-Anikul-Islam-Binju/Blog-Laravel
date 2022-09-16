<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Admin\Post;
use Illuminate\Http\Request;

class FrontendDashbordController extends Controller
{
    public function index()
    {
        $post = Post::with('category')->latest()->get();
        return view('frontend.pages.dashboard',compact('post'));
    }

    public function details($slug)
    {
        $post = Post::where('slug',$slug)->with('category')->latest()->first();
        return view('frontend.pages.details',compact('post'));
    }
}
