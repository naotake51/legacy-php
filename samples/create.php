<?php
// DB接続情報
$host = 'db';
$dbname = 'myapp';
$user = 'user';
$password = 'password';

try {
    // PDO接続
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


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
