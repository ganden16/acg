<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\MailController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Validation\ValidationException;

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/send-mail', [MailController::class, 'sendMail']);

Route::get('/', function () {
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
Route::post('/login', function (Request $request) {
    $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        if (Auth::attempt([
            'username' => $request->username,
            'password' => $request->password,
        ])) {
            return redirect()->intended(route('dashboard.index'));
        }

        throw ValidationException::withMessages([
            'message' => ['username atau password salah.'],
        ]);
    }
);
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
});


