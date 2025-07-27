<?php

namespace Database\Seeders;

use App\Models\Blog;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::create([
            'username' => 'admin',
            'password' => Hash::make('password'),
        ]);

        for ($i = 1; $i <= 10; $i++) {
             User::create([
            'username' => 'admin' . $i,
            'password' => Hash::make('password'),
            ]);
        }

        for ($i = 1; $i <= 10; $i++) {
           Blog::create([
            'slug' => 'blog-' . $i,
            'image' => env('APP_URL', 'http://localhost') . '/storage/images/blogs/blog' . $i . '.jpg',
           ]);
        }

        $blogs = Blog::all();
        foreach ($blogs as $blog) {
            $blog->translations()->create([
                'lang' => 'id',
                'title' => 'Blog ' . $blog->id . ' Indonesia lorem ipsum dolor sit amet consectetur adipisicing elit. Quos, quae.',
                'subtitle' => 'Blog ' . $blog->id . ' Indonesia Subtitle',
                'content' => 'Blog ' . $blog->id . ' Indonesia lorem ipsum dolor sit amet consectetur adipisicing elit. Quos, quae. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos, quae. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos, quae. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos, quae. lorem ipsum dolor sit amet consectetur adipisicing elit. Quos, quae. lorem ipsum dolor sit amet consectetur adipisicing elit. Quos, quae. lorem ipsum dolor sit amet consectetur adipisicing elit. Quos, quae.',
            ]);
            $blog->translations()->create([
                'lang' => 'en',
                'title' => 'Blog ' . $blog->id . ' English lorem ipsum dolor sit amet consectetur adipisicing elit. Quos, quae.',
                'subtitle' => 'Blog ' . $blog->id . ' English Subtitle',
                'content' => 'Blog ' . $blog->id . ' English lorem ipsum dolor sit amet consectetur adipisicing elit. Quos, quae. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos, quae. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos, quae. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos, quae. lorem ipsum dolor sit amet consectetur adipisicing elit. Quos, quae. lorem ipsum dolor sit amet consectetur adipisicing elit. Quos, quae. lorem ipsum dolor sit amet consectetur adipisicing elit. Quos, quae.',
            ]);
        }
    }
}
