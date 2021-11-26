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
    <form method="post" >
        <div class="col-md-10 offset-2">
            <div class="panel panel-default">
                <h2>Create New Note</h2>
                @csrf
                <div class="form-group">
                    <label for="name" class="col-md-4 control-label">Title</label>
                    <div class="col-md-6">
                        <input id="name" type="text" class="form-control" name="title">
                    </div>
                </div>
                <div class="form-group">
                    <label for="name" class="col-md-4 control-label">Content</label>
                    <div class="col-md-6">
                        <textarea class="form-control" name="content"></textarea>
                    </div>
                </div>
                <select style="margin-left: 15px;margin-bottom: 30px;width: 250px" class="custom-select"
                        name="category">
                    <option selected>Category</option>

                    @foreach($categories as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach

                </select><br>

                <div class="form-group">
                    <div class="col-md-6 col-md-offset-4">
                        <button type="submit" class="btn btn-primary">
                            Add
                        </button>
                        <a type="button" class="btn btn-danger" href="{{route('note.list')}}">Back</a>
                    </div>
                </div>

            </div>
        </div>

    </form>
</div>
</body>
</html>
@endsection
