@extends('backend.layout.master')
    @section('title','Admin')
    @section('content')
{{--<!doctype html>--}}
{{--<html lang="en">--}}
{{--<head>--}}
{{--    <meta charset="UTF-8">--}}
{{--    <meta name="viewport"--}}
{{--          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">--}}
{{--    <meta http-equiv="X-UA-Compatible" content="ie=edge">--}}
{{--    <title>Document</title>--}}
{{--</head>--}}
{{--<body>--}}
<div class="container">
<table class="table table-dark">
    <a href="{{route('note.showCreateForm')}}"><button type="submit" class="btn btn-success">Add Note</button></a>
    <thead>
    <th>ID</th>
    <th>Category</th>
    <th>Title</th>
    <th>Content</th>
    <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($notes as $note)
        <tr>
            <td>{{$note->id}}</td>
            <td>{{$note->category->name}}</td>
            <td style="width: 200px">{{$note->title}}</td>
            <td style="width: 500px">{{$note->content}}</td>

            <td><a href="{{route('note.detail',$note->id)}}"><button type="submit" class="btn btn-success">Detail</button></a></td>
            <td><a href="{{route("note.showFormEdit",$note->id)}}"><button type="submit" class="btn btn-success">edit</button></a></td>
{{--            <td><a onclick="return confirm('are you sure')" href="{{route('note.delete',$note->id)}}"><button type="submit" class="btn btn-success">Delete</button></a></td>--}}
        </tr>
    @endforeach
    </tbody>
</table>
    {{$notes->links()}}
</div>
{{--</body>--}}
{{--</html>--}}
@endsection
