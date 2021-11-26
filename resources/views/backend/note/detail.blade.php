{{--{{dd($note)}}--}}
 @extends('backend.layout.master')
    @section('title','Admin')
    @section('content')
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
<div class="container" style="margin-left: 250px;">


        @csrf
        <label>
            Title
            <input class="alert alert-primary" role="alert" type="text" name="title" value="{{$note->title}}">
        </label>
        <label>
            Content
            <input class="alert alert-primary" role="alert" type="text" name="content" value="{{$note->content}}">
        </label>
        <a href="{{route('note.list')}}"><button class="btn btn-primary" type="submit">back</button>
        </a>

</div>
</body>
</html>
@endsection
