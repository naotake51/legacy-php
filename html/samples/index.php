<?php

require_once '../lib/laravel_bootstrap.php';

// use Carbon\Carbon;
use App\Models\Sample;

// echo ((new Carbon())->format('Y-m-d H:i:s') . "\n");

try {
    // samplesテーブルからデータ取得
    $samples = Sample::get();

    echo view('samples/index', ['samples' => $samples])->render();
} catch (\Exception $e) {
    echo "データベース接続エラー: " . $e->getMessage();
    exit;
}
