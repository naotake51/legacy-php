<?php

namespace App\Extensions;

use Illuminate\Auth\SessionGuard;
use Illuminate\Contracts\Auth\UserProvider;
use Illuminate\Contracts\Session\Session;
use Symfony\Component\HttpFoundation\Request;
use Illuminate\Support\Timebox;

/**
 * SessionGuardのアカウントを特定するためのキー名をカスタマイズするためのクラス
 */
class NamedSessionGuard extends SessionGuard
{
    /**
     * Create a new authentication guard.
     *
     * @param  string  $name
     * @param  \Illuminate\Contracts\Auth\UserProvider  $provider
     * @param  \Illuminate\Contracts\Session\Session  $session
     * @param  \Symfony\Component\HttpFoundation\Request|null  $request
     * @param  \Illuminate\Support\Timebox|null  $timebox
     * @param  bool  $rehashOnLogin
     */
    public function __construct(
        $name,
        UserProvider $provider,
        Session $session,
        ?Request $request = null,
        ?Timebox $timebox = null,
        bool $rehashOnLogin = true,
        protected string $accountKeyName
    ) {
        parent::__construct($name, $provider, $session, $request, $timebox, $rehashOnLogin);
    }

    public function getName(): string
    {
        return $this->accountKeyName;
    }
}
