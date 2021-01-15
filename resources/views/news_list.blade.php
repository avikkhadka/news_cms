@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
  <title>News List</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>News List</h2>
  <a href="{{url('create_news')}}" class="btn btn-success">ADD News</a>
              
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Title</th>
        <th>Author</th>
        <th>Description</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach($data as $datas)
      <tr>
        
        <td width="400px">{{$datas->title}}</td>
        <td>{{$datas->author}}</td>
        <td width="400px">{{$datas->description}}</td>
        <td><a href="{{url('edit_news/'.$datas->id)}}" class="btn btn-warning">EDIT</a>  <a href="{{url('delete_news/'.$datas->id)}}" class="btn btn-danger">DELETE</a></td>
        @endforeach
      </tr>
      
    </tbody>
  </table>
  <section style="color:green">
                  {{session('msg')}}
                </section>
</div>

</body>
</html>

@endsection

