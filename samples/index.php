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

    // samplesテーブルからデータ取得
    $stmt = $pdo->query('SELECT id, name FROM samples');
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo "データベース接続エラー: " . $e->getMessage();
    exit;
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>新規サンプル作成</title>
</head>

<body>
    <h1>サンプル一覧</h1>
    <a href="/samples/new.php">新規作成</a>
    <table border='1'>
        <tr>
            <th>ID</th>
            <th>Name</th>
        </tr>
        <?php foreach ($rows as $row) { ?>
            <tr>
                <td><?php echo $row['id'] ?></td>
                <td><?php echo $row['name'] ?></td>
            </tr>
        <?php } ?>
    </table>
</body>

</html>