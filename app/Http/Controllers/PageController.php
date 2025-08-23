<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

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
		$title = 'Home - PT. Adhi Cahaya Global';
		$description = 'PT Adhi Cahaya Global: Your reliable partner for exporting authentic Indonesian spices, herbs & agro commodities. Sustainably sourced, export-grade quality, direct from farmers in East Java.';

        return view('home',compact('title','description','blogs'));
    }

    public function about(){
		$title = 'About Us - PT. Adhi Cahaya Global';
		$description = 'Learn about PT Adhi Cahaya Global — a trusted exporter of premium Indonesian natural commodities. Committed to transparency, sustainability, and empowering local farming communities since 2025.';
        return view('about',compact('title','description'));
    }

    public function contact(){
		$title = 'Contacts - PT. Adhi Cahaya Global';
		$description = 'Contact PT Adhi Cahaya Global for inquiries about Indonesian spice & agro exports. We offer flexible MOQ, custom packaging, and reliable shipping from Mojokerto, East Java.';
      	return view('contact',  compact('description','title'));
    }

    public function product(){
		$title = 'Products - PT. Adhi Cahaya Global';
		$description = 'Explore our export-grade Indonesian commodities: candlenut, ginger, cinnamon, corn, cloves & turmeric. All ethically sourced, traceable, and compliant with ISO & Codex standards.';
        return view('product',compact('title','description'));
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
		
		$title = 'Blog - PT. Adhi Cahaya Global';
		$description = 'Read our blog for the latest news, updates, and industry insights. Stay informed about the world of Indonesian spices and agro commodities.';
        return view('blog', compact('blogs','title','description'));
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
		
		$title = $blog->translations->first()?->title . ' - PT. Adhi Cahaya Global';
		$description = Str::limit(strip_tags($blog->translations->first()?->content), 155, '...');

        return view('showBlog', compact('blog', 'randomFourBlogs', 'title', 'description'));
    }
}
