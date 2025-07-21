<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\BlogTranslation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogs = Blog::with('translations')->paginate(20);
        return view('dashboard.blog.index', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.blog.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'slug' => 'required|unique:blogs',
            'image' => 'nullable|string',
            'fileImage' => 'image|max:5000',

            'title_id' => 'required|string|max:255',
            'content_id' => 'required',

            'title_en' => 'nullable|string|max:255',
            'content_en' => 'nullable',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $url = null;
		if ($request->hasFile('fileImage')) {
			$path = $request->fileImage->store('images/products');
			$url = Storage::url($path);
		}

        $blog = Blog::create([
            'slug' => $request->slug,
            'image' => $url,
        ]);

        BlogTranslation::create([
            'blog_id' => $blog->id,
            'lang' => 'id',
            'title' => $request->title_id,
            'subtitle' => $request->subtitle_id ?? null,
            'content' => $request->content_id,
        ]);

        if ($request->filled('title_en') || $request->filled('content_en')) {
            BlogTranslation::create([
                'blog_id' => $blog->id,
                'lang' => 'en',
                'title' => $request->title_en ?? null,
                'subtitle' => $request->subtitle_en ?? null,
                'content' => $request->content_en ?? null,
            ]);
        }

        return redirect()->route('dashboard.blog.index')->with('success', 'Blog berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Blog $blog)
    {
        $blog->load('translations');
        return view('dashboard.blog.show', compact('blog'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Blog $blog)
    {
        $blog->load('translations');
        return view('dashboard.blog.edit', compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Blog $blog)
    {
         $validator = Validator::make($request->all(), [
            'slug' => 'required|unique:blogs,slug,'.$blog->id,
            'image' => 'nullable|string',
            'fileImage' => 'image|max:5000',

            'title_id' => 'required|string|max:255',
            'content_id' => 'required',

            'title_en' => 'nullable|string|max:255',
            'content_en' => 'nullable',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $image = $product->image ?? null;
		if ($request->hasFile('fileImage')) {
			if ($blog->image && !strpos($image, '/seeders')) {
				$urlImage = explode("/storage", $image, 2);
				$path =  $urlImage[1];
				Storage::delete($path);
			}
			$path = $request->fileImage->store('images/products');
			$image = Storage::url($path);
		}

        $blog->update([
            'slug' => $request->slug,
            'image' => $image,
        ]);

        $idTranslation = $blog->translations->where('lang', 'id')->first();
        if ($idTranslation) {
            $idTranslation->update([
                'title' => $request->title_id,
                'subtitle' => $request->subtitle_id ?? null,
                'content' => $request->content_id,
            ]);
        }

        $enTranslation = $blog->translations->where('lang', 'en')->first();
        if ($enTranslation) {
            $enTranslation->update([
                'title' => $request->title_en ?? null,
                'subtitle' => $request->subtitle_en ?? null,
                'content' => $request->content_en ?? null,
            ]);
        } elseif ($request->filled('title_en') || $request->filled('content_en')) {
            BlogTranslation::create([
                'blog_id' => $blog->id,
                'lang' => 'en',
                'title' => $request->title_en ?? null,
                'subtitle' => $request->subtitle_en ?? null,
                'content' => $request->content_en ?? null,
            ]);
        }

        return redirect()->back()->with('success', 'Blog berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $blog)
    {
        $blog->delete();
        return redirect()->route('dashboard.blog.index')->with('success', 'Blog berhasil dihapus.');
    }
}
