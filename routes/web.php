<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\MailController;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Validation\ValidationException;

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/send-mail', [MailController::class, 'sendMail']);

Route::get('/', function () {
	// $blogs = Blog::with('translations:lang,title')->take(5)->pluck('id,image,slug,title');
    return view('home');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/products', function () {
    return view('products');
});
Route::get('/blog', function () {
    return view('blog');
});

Route::get('/login', function () {
    return view('login');
})->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::delete('/logout', function (Request $request) {
    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    return redirect('/');
});

Route::prefix('dashboard')->name('dashboard.')->group(function () {
    Route::get('/', function () {
        return view('dashboard.index');
    })->name('index');
    Route::resource('blog', BlogController::class);
    Route::get('admin/profile', [AuthController::class, 'profile'])->name('profile');
    Route::put('admin/profile', [AuthController::class, 'updateProfile'])->name('profile.update');
});

Route::post('/language', function (Request $request) {
    $lang = $request->input('lang');
    if (in_array($lang, ['en', 'id'])) {
        session(['locale' => $lang]);
    }
    return back();
})->name('language.switch');


