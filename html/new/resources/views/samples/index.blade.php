@extends('layout')

@section('title', 'サンプル一覧')

@section('content')
<h1>サンプル一覧</h1>
<a href="/samples/new.php" class="btn">新規作成</a>
<table>
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
@endsection