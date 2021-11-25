<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
    @csrf
    <label>
        <input type="text" name="title" value="{{$note->title}}">
    </label>
    <label>
        <input type="text" name="content" value="{{$note->content}}">
    </label>

    <button type="submit">Update</button>
</form>
</body>
</html>
