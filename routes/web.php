<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/* PUBLIC ROUTES */
Route::group([], function () {

    Route::get('/aaa', function () {
        return view('welcome');
    });

    Route::get('/', function () {
        return view('public.pages.index');
    })->name('home');


    Route::get('/about', function () {
        return view('public.pages.about');
    })->name('about');


    Route::get('/contact', function () {
        return view('public.pages.contact');
    })->name('contact');


    Route::get('/faq', function () {
        return view('public.pages.faq');
    })->name('faq');


    Route::get('/blog-home', function () {
        return view('public.pages.blog-home');
    })->name('blog.home');


    Route::get('/blog-post', function () {
        return view('public.pages.blog-post');
    })->name('blog.post');


    Route::get('/pricing', function () {
        return view('public.pages.pricing');
    })->name('pricing');


    Route::get('/portfolio-item', function () {
        return view('public.pages.portfolio-item');
    })->name('portfolio.item');


    Route::get('/portfolio-overview', function () {
        return view('public.pages.portfolio-overview');
    })->name('portfolio.overview');

});


/*Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');*/

/* ADMIN ROUTES */
Route::group(['middleware' => ['auth', 'verified'], 'prefix' => 'admin'], function () {

    Route::get('/dashboard', function () {
        return view('admin.pages.dashboard');
    })->name('dashboard');

    // Confirm page example
    Route::get('/demo', function () {
        return view('admin.pages.dashboard-content');
    })->name('demo');

    // Profile
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Profile Example
    Route::get('/profile-example', function () {
        return view('admin.pages.profile-example');
    })->name('profile.example');

    // Bootstrap Table
    Route::get('/bootstrap-tables', function () {
        return view('admin.pages.bootstrap-tables');
    })->name('bootstrap.tables');

    // Users
    Route::get('/users', function () {
        return view('admin.pages.users');
    })->name('users');

    // Transactions
    Route::get('/transactions', function () {
        return view('admin.pages.transactions');
    })->name('transactions');

    // UI components
    Route::get('/buttons', function () {
        return view('admin.pages.volt.buttons');
    })->name('buttons');
    Route::get('/modals', function () {
        return view('admin.pages.volt.modals');
    })->name('modals');
    Route::get('/notifications', function () {
        return view('admin.pages.volt.notifications');
    })->name('notifications');
    Route::get('/forms', function () {
        return view('admin.pages.volt.forms');
    })->name('forms');
    Route::get('/typography', function () {
        return view('admin.pages.volt.typography');
    })->name('typography');


    // Error page example
    Route::get('/500', function () {
        return view('errors.500');
    })->name('500');

});

require __DIR__.'/auth.php';

// Confirm page example
Route::get('/confirm', function () {
    return view('auth.pages.confirm-password');
});

Route::get('/verify', function () {
    return view('auth.pages.verify-email');
});

Route::get('/lock', function () {
    return view('auth.pages.lock');
});
