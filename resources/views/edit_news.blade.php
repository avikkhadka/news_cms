<!DOCTYPE html>
<html>
<style>
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
<body>

<h3>Edit News</h3>

<div>
  <form action="{{url('update_news/'.$results[0]->id)}}" enctype="multipart/form-data">
    <label for="fname">Title</label>
    <input type="text" id="fname" name="title" placeholder="title.." value="{{$results[0]->title}}">

    <label for="lname">Author</label>
    <input type="text" id="lname" name="author" placeholder="author.." value="{{$results[0]->author}}">

    <label for="lname">Description</label>
    <input type="text" id="lname" name="description" placeholder="description.." value="{{$results[0]->description}}">
    <input type="file" name="image">
    <input type="submit" value="Submit">
  </form>
</div>

</body>
</html>
