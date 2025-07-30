<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\PageController;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Validation\ValidationException;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

Route::post('/send-mail', [MailController::class, 'sendMail'])->name('send-email');

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::get('/product', [PageController::class, 'product'])->name('product');
Route::get('/blog', [PageController::class, 'blog'])->name('blog');

Route::get('/login', [AuthController::class, 'indexLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');
Route::delete('/logout', [AuthController::class, 'logout'])->name('logout');

Route::prefix('dashboard')->name('dashboard.')->middleware('auth')->group(function () {
    Route::resource('blog', BlogController::class);
    Route::get('/' ,[DashboardController::class, 'index'])->name('index');
    Route::get('change-password', [AuthController::class, 'updateProfile'])->name('change-password');
    Route::put('change-password', [AuthController::class, 'changePassword'])->name('change-password.update');
});

Route::post('/language', function (Request $request) {
    $lang = $request->input('lang');
    if (in_array($lang, ['en', 'id'])) {
        session(['locale' => $lang]);
    }
    return back();
})->name('language.switch');


