<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Защищенные маршруты
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // Новые маршруты для VPN страниц
    Route::get('/connect-vpn', function () {
        return view('vpn.connect-vpn');
    })->name('connect-vpn');

    Route::get('/active-configurations', function () {
        return view('vpn.active-configurations');
    })->name('active-configurations');

    Route::get('/subscription', function () {
        return view('vpn.subscription');
    })->name('subscription');

    Route::get('/referal', function () {
            return view('vpn.referal');
        })->name('referal');

    Route::get('/settings', function () {
            return view('vpn.settings');
        })->name('settings');

    Route::get('/support', function () {
            return view('vpn.support');
        })->name('support');
});
