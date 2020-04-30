@extends('layouts.app')
@section('content')

<!DOCTYPE HTML>
<html>
<head>
    <title>掲示板</title>
</head>
<body>

<h1>詳細画面</h1>

<input name="ex_arrangenumber" value="{{ $openout->arrangenumber }}">
スコア<br>
<input name="ex_arrangefirst" value="{{ $openout->arrangefirst }}">
１投目<br>
<input name="ex_arrangesecond" value="{{ $openout->arrangesecond }}">
２投目<br>
<input name="ex_arrangethird" value="{{ $openout->arrangethird }}">
３投目<br>
<textarea name="ex_arrangememo" rows="4" cols="40">{{ $openout->arrangememo }}</textarea>
アレンジメモ<br><br>


<form method ="GET" action= "{{url('openout/edit', ['id' => $openout->id ])}}" >
{{ csrf_field() }}
    <input class="btn btn-info" type="submit" value="変更する">
</form>
<br>
<form method ="POST" action= "{{url('openout/destroy', ['id' => $openout->id ])}}" >
{{ csrf_field() }}
    <input type="submit" value="削除する" class="btn btn-danger" onclick='return confirm("本当に削除しますか?");'>
</form>

</body>
</html>
@endsection