<?php
require_once '../lib/pdo.php';

$pdo = getDbConnection();

try {
    // POSTデータ取得
    $name = $_POST['name'];

    // レコード挿入
    $stmt = $pdo->prepare("INSERT INTO samples (name) VALUES (:name)");
    $stmt->execute([
        ':name' => $name,
    ]);

    // リダイレクト
    header('Location: /samples/index.php');
    exit;
} catch (PDOException $e) {
    echo "エラーが発生しました: " . $e->getMessage();
}
