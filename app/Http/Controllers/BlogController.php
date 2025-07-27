<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\BlogTranslation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogs = Blog::join(new BlogTranslation()->getTable().' as bt' , 'blogs.id', '=', 'bt.blog_id')
            ->select(
                'blogs.id as id',
                'blogs.image as image',
                'blogs.slug as slug',
                'bt.title as title',
                'bt.subtitle as subtitle'
            )
            ->where('bt.lang', 'id')
            ->orderBy('blogs.updated_at', 'desc')
            ->get();

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
		$request->validate([
			'fileImage' => 'nullable|image|max:5000',
			'title_id' => 'required|string|max:255',
			'title_en' => 'required|string|max:255',
			'content_id' => 'required',
			'content_en' => 'required',
			'subtitle_id' => 'nullable|string|max:255',
			'subtitle_en' => 'nullable|string|max:255',
		]);

		$baseSlug = Str::slug($request->title_en);
		$slug = $baseSlug;
		$count = 2;
		while (Blog::where('slug', $slug)->exists()) {
			$slug = $baseSlug . '-' . $count;
			$count++;
		}
		$url = null;
		if ($request->hasFile('fileImage')) {
			$path = $request->file('fileImage')->store('images/blogs');
			$url = Storage::url($path);
		}

		try {
			DB::beginTransaction();
			$blog = Blog::create([
					'slug' => $slug,
					'image' => $url,
			]);
			BlogTranslation::create([
					'blog_id' => $blog->id,
					'lang' => 'id',
					'title' => $request->title_id,
					'subtitle' => $request->subtitle_id,
					'content' => $request->content_id,
			]);
			BlogTranslation::create([
					'blog_id' => $blog->id,
					'lang' => 'en',
					'title' => $request->title_en,
					'subtitle' => $request->subtitle_en,
					'content' => $request->content_en,
			]);
			DB::commit();

			return redirect()->back()->with('success', 'Blog has been created successfully.');

		} catch (\Exception $e) {
			DB::rollback();
			return redirect()->back()->with('error', 'Blog failed to create, please try again. Error:' . $e->getMessage());
		}
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
        $blog->load('translation_id', 'translation_en');
        return view('dashboard.blog.edit', compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Blog $blog)
    {
		$request->validate([
			'fileImage' => 'nullable|image|max:5000',
			'title_id' => 'required|string|max:255',
			'title_en' => 'required|string|max:255',
			'content_id' => 'required',
			'content_en' => 'required',
			'subtitle_id' => 'nullable|string|max:255',
			'subtitle_en' => 'nullable|string|max:255',
		]);

        $baseSlug = Str::slug($request->title_en);
		$slug = $baseSlug;
		$count = 2;
		while (Blog::where('slug', $slug)->exists()) {
			$slug = $baseSlug . '-' . $count;
			$count++;
		}

      $image = $blog->image ?? null;
		if ($request->hasFile('fileImage')) {
			if ($blog->image) {
				$urlImage = explode("/storage", $image, 2);
				$path =  $urlImage[1];
				Storage::delete($path);
			}
			$path = $request->fileImage->store('images/blogs');
			$image = Storage::url($path);
		}

        $blog->update([
            'slug' => $slug,
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
        }

        return redirect()->route('dashboard.blog.index')->with('success-update', 'Blog has been updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $blog)
    {
        $blog->delete();
        return redirect()->route('dashboard.blog.index')->with('success-delete', 'Blog has been deleted successfully.');
    }
}
