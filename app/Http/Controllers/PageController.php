<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home(){
        return view('home');
    }

    public function about(){
        return view('about');
    }

    public function contact(){
        return view('contact');
    }

    public function product(){
        return view('product');
    }

    public function blog(){
        $blogs = Blog::with('translation_en')->latest()->paginate(7);
        return view('blog', compact('blogs'));
    }
}
