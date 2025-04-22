<?php
?>
<!DOCTYPE html>
<html>

<head>
    <title>新規サンプル作成</title>
</head>

<body>
    <h1>新規サンプル作成</h1>
    <form action="/samples/create.php" method="post">
        <div>
            <label for="name">名前:</label>
            <input type="text" id="name" name="name" required>
        </div>
        <button type="submit">作成</button>
    </form>
</body>

</html>