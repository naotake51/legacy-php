<?php

function getDbConnection()
{
    // DB接続情報
    $host = 'db';
    $dbname = 'myapp';
    $user = 'user';
    $password = 'password';

    try {
        // PDO接続
        $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    } catch (PDOException $e) {
        echo "データベース接続エラー: " . $e->getMessage();
        exit;
    }
}
