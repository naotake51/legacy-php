<?php
require_once '../vendor/autoload.php';
require_once '../lib/pdo.php';

use Carbon\Carbon;

echo ((new Carbon())->format('Y-m-d H:i:s') . "\n");

$pdo = getDbConnection();

try {
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