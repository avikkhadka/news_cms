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
              
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Title</th>
        <th>Author</th>
        <th>Description</th>
      </tr>
    </thead>
    <tbody>
      @foreach($data as $datas)
      <tr>
        
        <td width="400px">{{$datas->title}}</td>
        <td>{{$datas->author}}</td>
        <td width="400px">{{$datas->description}}</td>

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
