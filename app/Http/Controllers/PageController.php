<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PageController extends Controller
{
    public function home(){
        $lang = Session::get('locale', 'en');
        $blogs = Blog::with([
                        'translations' => function ($query) use ($lang) {
                            $query->where('lang', $lang);
                    },
                ])
                ->latest()
                ->take(3)
                ->get();
        return view('home',compact('blogs'));
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
        $lang = Session::get('locale', 'en');
        $blogs = Blog::with([
                        'translations' => function ($query) use ($lang) {
                            $query->where('lang', $lang);
                    },
                ])
                ->latest()
                ->paginate(7);
        return view('blog', compact('blogs'));
    }

    public function changeLanguage($lang){
        if (in_array($lang, ['en', 'id'])) {
            Session::put('locale', $lang);
            app()->setLocale($lang);
        }

        return redirect()->back();
    }

    public function showBlog(Blog $blog)
    {
        $lang = app()->getLocale() ?? 'en';

        $blog->load([
            'translations' => function ($query) use ($lang) {
                $query->where('lang', $lang);
            },
        ]);

        $randomFourBlogs = Blog::with([
            'translations' => function ($query) use ($lang) {
                $query->where('lang', $lang);
            },
        ])
        ->inRandomOrder()
        ->take(4)
        ->get();

        return view('showBlog', compact('blog', 'randomFourBlogs'));
    }
}
