@extends('layout')

@section('title', '新規サンプル作成')

@section('content')
<h1>新規サンプル作成</h1>
<form action="/samples/create.php" method="post">
    <div>
        <label for="name">名前:</label>
        <input type="text" id="name" name="name" required>
    </div>
    <button type="submit">作成</button>
</form>
@endsection