<?php
require_once '../vendor/autoload.php';
require_once '../lib/view.php';

try {
    echo $viewFactory->make('samples/new')->render();
} catch (\Exception $e) {
    echo "テンプレートレンダリングエラー: " . $e->getMessage();
    exit;
}
