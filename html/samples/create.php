<?php
require_once '../vendor/autoload.php';
require_once '../lib/eloquent.php';

use Lib\Models\Sample;

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
