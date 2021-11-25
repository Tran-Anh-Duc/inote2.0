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
<table border="1px">
    <a href="{{route('note.showCreateForm')}}">Add inote</a>
    <thead>
    <th>Title</th>
    <th>Content</th>
    <th colspan="2">Action</th>
    </thead>
    <tbody>
    @foreach($notes as $note)
        <tr>
            <td>{{$note->title}}</td>
            <td>{{$note->content}}</td>
            <td><a href="{{route('note.detail',$note->id)}}">Detail</a></td>
            <td><a href="{{route("note.showFormEdit",$note->id)}}">Edit</a></td>
            <td><a onclick="return confirm('are you sure')" href="{{route('note.delete',$note->id)}}">Delete</a></td>
        </tr>
    @endforeach
    </tbody>
</table>
</body>
</html>
