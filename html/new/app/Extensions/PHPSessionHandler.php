<?php

namespace App\Extensions;

use SessionHandlerInterface;

/**
 * $_SESSIONと同期するためのLaravel用カスタムセッションハンドラ
 */

class PHPSessionHandler implements SessionHandlerInterface
{
    public function open(string $savePath, string $sessionName): bool
    {
        return true;
    }

    public function close(): bool
    {
        return true;
    }

    public function read(string $sessionId): string|false
    {
        session_start();
        return serialize($_SESSION);
    }

    public function write(string $sessionId, string $data): bool
    {
        $_SESSION = unserialize($data);
        return true;
    }

    public function destroy(string $sessionId): bool
    {
        session_destroy();
        return true;
    }

    public function gc(int $maxLifetime): int|false
    {
        return true;
    }
}
