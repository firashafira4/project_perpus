<?php

namespace App\Providers;

use Illuminate\Support\Facades\Schema; // Pastikan ini diimport
use Illuminate\Support\ServiceProvider;

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
        // Pastikan ini berjalan hanya jika ada database yang dikonfigurasi
        if (env('DB_DATABASE')) {
            Schema::defaultStringLength(191);
}
}
}
