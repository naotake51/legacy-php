<?php

namespace App\Providers;

use App\Extensions\PHPSessionHandler;
use Illuminate\Support\Facades\Session;
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
        /**
         * 既存のPHPが$_SESSIONでセッション管理しているため、Laravelでも同じように$_SESSIONでセッション管理する必要がある。
         * $_SESSIONからIlluminate\Session\Storeにデータ同期するためのセッションハンドラを登録。
         */
        Session::extend('php', function ($app) {
            return new PHPSessionHandler();
        });
    }
}
