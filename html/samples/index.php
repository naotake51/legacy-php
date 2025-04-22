<?php
require_once '../vendor/autoload.php';
require_once '../lib/eloquent.php';

use Carbon\Carbon;
use Lib\Models\Sample;

echo ((new Carbon())->format('Y-m-d H:i:s') . "\n");

try {
    // samplesテーブルからデータ取得
    $samples = Sample::get();
} catch (\Exception $e) {
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
        <?php foreach ($samples as $sample) { ?>
            <tr>
                <td><?php echo $sample->id ?></td>
                <td><?php echo $sample->name ?></td>
            </tr>
        <?php } ?>
    </table>
</body>

</html>