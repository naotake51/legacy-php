<?php

require_once '../lib/laravel_bootstrap.php';

use App\Models\Sample;

try {
    // POSTデータ取得
    $name = $_POST['name'];

    // レコード挿入
    Sample::create([
        'name' => $name,
    ]);

    // リダイレクト
    header('Location: /samples/index.php');
    exit;
} catch (\Exception $e) {
    echo "エラーが発生しました: " . $e->getMessage();
}
