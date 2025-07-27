<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\User;
use App\Models\Visitor;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $weeklyVisitors = Visitor::where('visited_at', '>=', now()->subWeek())->count();
        $threeMonthsVisitors = Visitor::where('visited_at', '>=', now()->subMonths(3))->count();
        $allTimeVisitors = Visitor::count();

        $countBlogs = Blog::count();
        $countAdmins = User::count();

        $lastBlogUpdated = Blog::orderBy('updated_at', 'desc')->pluck('updated_at')->first();

        return view('dashboard.index', compact(
            'weeklyVisitors',
            'threeMonthsVisitors',
            'allTimeVisitors',
            'countBlogs',
            'lastBlogUpdated'
        ));
    }
}
