<?php
require_once '../vendor/autoload.php';
require_once '../lib/eloquent.php';
require_once '../lib/view.php';

use Carbon\Carbon;
use Lib\Models\Sample;

echo ((new Carbon())->format('Y-m-d H:i:s') . "\n");

try {
    // samplesテーブルからデータ取得
    $samples = Sample::get();

    echo $viewFactory->make('samples/index', ['samples' => $samples])->render();
} catch (\Exception $e) {
    echo "データベース接続エラー: " . $e->getMessage();
    exit;
}
