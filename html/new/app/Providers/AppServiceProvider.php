<?php

namespace App\Providers;

use App\Extensions\PHPSessionHandler;
use App\Extensions\NamedSessionGuard;
use Illuminate\Support\Facades\Auth;
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

        /**
         * 既存のPHPが独自のキー名でログイン情報を保持しているので、Laravel側でもその値からログイン情報を取得できるようにする必要がある。
         */
        Auth::extend('named-session', function ($app, $name, array $config) {
            return new NamedSessionGuard(
                $name,
                Auth::createUserProvider($config['provider']),
                $app['session.store'],
                null,
                null,
                true,
                $config['key-name']
            );
        });
    }
}
