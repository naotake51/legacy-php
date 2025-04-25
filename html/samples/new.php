<?php

require_once '../lib/laravel_bootstrap.php';

try {
    echo view('samples/new')->render();
} catch (\Exception $e) {
    echo "テンプレートレンダリングエラー: " . $e->getMessage();
    exit;
}
