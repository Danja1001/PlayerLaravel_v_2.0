

<!DOCTYPE html>
<html>
<head>
    <title>Upload File</title>
</head>
<body>
@foreach($songs as $song)
    <label>Name - {{$song->name}}</label>
    <label>Name - {{$song->artist}}</label>
<audio controls>
    <source src="/public/songs/{{$song->song}}">
</audio><br>
@endforeach
<br><br><br>
<form method="post" action="{{ route('uploadFile') }}" enctype="multipart/form-data">
    Name<input type="text" id="name" name="name"><br>
    Artist<input type="text" id="artist" name="artist"><br>
    <input type="file" name="song">
    <button type="submit">Загрузить</button>
    {{csrf_field()}}
</form>

</body>
</html>