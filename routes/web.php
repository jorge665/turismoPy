<?php

use App\Livewire\Auth\Login;
use App\Livewire\Auth\Passwords\Reset;
use App\Livewire\Auth\Register;
use App\Livewire\Dashboard\Admin\Dashboard;
use App\Livewire\Dashboard\Destination\Index as DestinationIndex;
use App\Livewire\Dashboard\Event\Index as EventIndex;
use App\Livewire\Dashboard\Profile;
use App\Livewire\Dashboard\User\Index;
use App\Livewire\Home;
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

Route::get('/refresh-csrf', function () {
    return response()->json(['csrf_token' => csrf_token()]);
});

Route::get('/', Home::class)->name('home');

Route::middleware('guest')->group(function () {
    Route::get('/login', Login::class)->name('login');
    Route::get('/register', Register::class)->name('register');
    Route::get('/password/reset', Reset::class)->name('password.request');
});

Route::middleware('auth')->group(function () {
    Route::get('/logout', function () {
        auth()->logout();
        return redirect()->route('home');
    })->name('logout');

    Route::middleware('role:admin')->group(function () {
        ##Admin Dashboard
        Route::get('/admin/dashboard',  Dashboard::class)->name('admin.dashboard');
        Route::get('/admin/user', Index::class)->name('admin.user'); 
    });

    Route::middleware('role:collaborator|admin')->group(function () {
        ##Collaborator Dashboard
        Route::get('/collaborator/dashboard', function () {
            return json_encode(['message' => 'Collaborator Dashboard']);
        })->name('collaborator.dashboard');
        
        Route::get('/profile', Profile::class)->name('profile');

        Route::get('/collaborator/destination', DestinationIndex::class)->name('collaborator.destination');

        Route::get('/collaborator/event', EventIndex::class)->name('collaborator.event');
    });
});
