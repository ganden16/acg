@extends('layout.landingPage')

@section('title')
{{ isset($blog) ? $blog->translations->first()?->title : 'Detail Blog | ACG' }}
@endsection

@section('content')

<main class="pt-8 pb-16 lg:pt-16 lg:pb-24 bg-white dark:bg-gray-900 antialiased">
  <div class="flex justify-between px-4 mx-auto max-w-screen-xl ">
      <article class="mx-auto w-full max-w-2xl format format-sm sm:format-base lg:format-lg format-blue dark:format-invert">
          <header class="mb-4 lg:mb-6 not-format">
              <h1 class="mb-4 text-3xl font-extrabold leading-tight text-gray-900 lg:mb-6 lg:text-4xl dark:text-white">{{ $blog->translations->first()->title }}</h1>
              <h5 class="mb-4 text-lg font-light text-gray-500 dark:text-gray-400">
                <time datetime="{{ $blog->updated_at->toISOString() }}" class="text-gray-500 mr-4">
                    {{ __('blog.lastUpdated') }} {{ $blog->updated_at->format('F j, Y') }}
                </time>
              </h5>
          </header>
          <figure><img src="{{ $blog->image }}" alt="{{ $blog->translations->first()->title }}" class="mb-4 rounded-lg">
        <h5 class="mb-2 text-xl font-bold leading-tight text-gray-900 dark:text-white">{{ $blog->translations->first()->subtitle }}</h5>
        <p class="lead">
            {{ $blog->translations->first()->content }}
        </p>
      </article>
  </div>
</main>

<aside aria-label="Related articles" class="py-8 lg:py-24 bg-gray-50 dark:bg-gray-800 mb-16">
    <div class="px-4 mx-auto max-w-screen-xl">
        <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-12">{{ __('function.otherArticles') }}</h2>
        <div class="grid gap-12 sm:grid-cols-2 lg:grid-cols-4">
            @foreach ($randomFourBlogs as $randomBlog)
                <article class="max-w-xs">
                    <a href="{{ route('blog.show', $randomBlog->slug) }}">
                    <img src="{{ $randomBlog->image }}" class="mb-5 rounded-lg" alt="{{ $randomBlog->translations->first()->title }}">
                </a>
                <h2 class="mb-2 text-xl font-bold leading-tight text-gray-900 dark:text-white">
                    <a href="{{ route('blog.show', $randomBlog->slug) }}">{{ $randomBlog->translations->first()->title }}</a>
                </h2>
                <p class="mb-4 text-gray-500 dark:text-gray-400">{{ Str::limit($blog->translations->first()->content, 200, '...') }}</p>
                <a href="{{ route('blog.show', $randomBlog->slug) }}" class="inline-flex items-center font-medium underline underline-offset-4 text-primary-600 dark:text-primary-500 hover:no-underline">
                    {{ __('function.readMore') }}
                </a>
                </article>
            @endforeach
      </div>
  </div>
</aside>

@endsection
