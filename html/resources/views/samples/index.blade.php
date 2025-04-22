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
        @foreach ($samples as $sample)
        <tr>
            <td>{{ $sample->id }}</td>
            <td>{{ $sample->name }}</td>
        </tr>
        @endforeach
    </table>
</body>

</html>