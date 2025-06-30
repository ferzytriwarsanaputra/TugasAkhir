<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        View::composer('*', function ($view) {
            if (Auth::check() && Auth::user()->role === 'siswa') {
                $aksesMateri = app(\App\Http\Controllers\SiswaController::class)->cekProgress();
                $view->with('aksesMateri', $aksesMateri);
            }
        });
        Carbon::setLocale('id');
        setlocale(LC_TIME, 'id_ID.utf8');
    }
}
