@extends('layout.dashboard')

@section('title', 'Dashboard | ACG')

@section('link-meta')
<link rel="stylesheet" href="{{ asset('assets1/fonts/phosphor/duotone/style.css') }}" />
@endsection

@section('li-breadcrumb')
<li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
<li class="breadcrumb-item" aria-current="page">Index</li>
@endsection

@section('content')
<div class="grid grid-cols-12 gap-x-6">
    <div class="col-span-12 xl:col-span-4 md:col-span-6">
    <div class="card">
        <div class="card-header !pb-0 !border-b-0">
            <h5>Weekly Visitors</h5>
        </div>
        <div class="card-body">
        <div class="flex items-center justify-between gap-3 flex-wrap">
            <h3 class="font-light flex items-center mb-0">
                {{ $weeklyVisitors }}
            </h3>
            <p class="mb-0">views</p>
        </div>
        <div class="w-full bg-theme-bodybg rounded-lg h-1.5 mt-6 dark:bg-themedark-bodybg">
            <div class="bg-theme-bg-1 h-full rounded-lg shadow-[0_10px_20px_0_rgba(0,0,0,0.3)]" role="progressbar"
            style="width: 100%"></div>
        </div>
        </div>
    </div>
    </div>
    <div class="col-span-12 xl:col-span-4 md:col-span-6">
    <div class="card">
        <div class="card-header !pb-0 !border-b-0">
        <h5>3 Months Visitors</h5>
        </div>
        <div class="card-body">
        <div class="flex items-center justify-between gap-3 flex-wrap">
            <h3 class="font-light flex items-center mb-0">
                {{ $threeMonthsVisitors }}
            </h3>
            <p class="mb-0">views</p>
        </div>
        <div class="w-full bg-theme-bodybg rounded-lg h-1.5 mt-6 dark:bg-themedark-bodybg">
            <div class="bg-theme-bg-1 h-full rounded-lg shadow-[0_10px_20px_0_rgba(0,0,0,0.3)]" role="progressbar"
            style="width: 100%"></div>
        </div>
        </div>
    </div>
    </div>
    <div class="col-span-12 xl:col-span-4">
    <div class="card">
        <div class="card-header !pb-0 !border-b-0">
        <h5>All Time Visitors</h5>
        </div>
        <div class="card-body">
        <div class="flex items-center justify-between gap-3 flex-wrap">
            <h3 class="font-light flex items-center mb-0">
                {{ $allTimeVisitors }}
            </h3>
            <p class="mb-0">views</p>
        </div>
        <div class="w-full bg-theme-bodybg rounded-lg h-1.5 mt-6 dark:bg-themedark-bodybg">
            <div class="bg-theme-bg-1 h-full rounded-lg shadow-[0_10px_20px_0_rgba(0,0,0,0.3)]" role="progressbar"
            style="width: 100%"></div>
        </div>
        </div>
    </div>
    </div>
    <div class="col-span-12 xl:col-span-4">
    <div class="card">
        <div class="card-header !pb-0 !border-b-0">
        <h5>Total Blogs</h5>
        </div>
        <div class="card-body">
        <div class="flex items-center justify-between gap-3 flex-wrap">
            <h3 class="font-light flex items-center mb-0">
                {{ $countBlogs }}
            </h3>
            <p class="mb-0">posts</p>
        </div>
        <div class="w-full bg-theme-bodybg rounded-lg h-1.5 mt-6 dark:bg-themedark-bodybg">
            <div class="bg-theme-bg-1 h-full rounded-lg shadow-[0_10px_20px_0_rgba(0,0,0,0.3)]" role="progressbar"
            style="width: 100%"></div>
        </div>
        </div>
    </div>
    </div>
    <div class="col-span-12 xl:col-span-4">
    <div class="card">
        <div class="card-header !pb-0 !border-b-0">
        <h5>Total Admins</h5>
        </div>
        <div class="card-body">
        <div class="flex items-center justify-between gap-3 flex-wrap">
            <h3 class="font-light flex items-center mb-0">
                5
            </h3>
            <p class="mb-0">users</p>
        </div>
        <div class="w-full bg-theme-bodybg rounded-lg h-1.5 mt-6 dark:bg-themedark-bodybg">
            <div class="bg-theme-bg-1 h-full rounded-lg shadow-[0_10px_20px_0_rgba(0,0,0,0.3)]" role="progressbar"
            style="width: 100%"></div>
        </div>
        </div>
    </div>
    </div>
    <div class="col-span-12 xl:col-span-4">
    <div class="card">
        <div class="card-header !pb-0 !border-b-0">
        <h5>Last Updated Blog</h5>
        </div>
        <div class="card-body">
        <div class="flex items-center justify-between gap-3 flex-wrap">
            <h3 class="font-light flex items-center mb-0">
                {{ $lastBlogUpdated }}
            </h3>
        </div>
        <div class="w-full bg-theme-bodybg rounded-lg h-1.5 mt-6 dark:bg-themedark-bodybg">
            <div class="bg-theme-bg-1 h-full rounded-lg shadow-[0_10px_20px_0_rgba(0,0,0,0.3)]" role="progressbar"
            style="width: 100%"></div>
        </div>
        </div>
    </div>
    </div>

</div>
@endsection
