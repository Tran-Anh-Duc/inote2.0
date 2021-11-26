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
<div class="container" style="margin-left: 250px;">

<form action="" method="post">
    @csrf
    <label>
        <input class="alert alert-primary" role="alert" type="text" name="title" value="{{$note->title}}">
    </label>
    <label>
        <input class="alert alert-primary" role="alert" type="text" name="content" value="{{$note->content}}">
    </label><br>
    <select style="margin-left: 15px;margin-bottom: 30px;width: 250px" class="custom-select"
            name="category">
        <option selected>Category</option>

        @foreach($categories as $category)
            <option value="{{$category->id}}">{{$category->name}}</option>
        @endforeach

    </select><br>

    <button class="btn btn-primary" type="submit">Update</button>
    <a href="{{route('note.list')}}"><button class="btn btn-primary" type="submit">Back</button>
    </a>
</form>
</div>
</body>
</html>
@endsection
