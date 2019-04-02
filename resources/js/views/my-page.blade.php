<!DOCTYPE html>
<html>
<head>
	<title>Success Page</title>
	<style>
div.gallery {
  margin: 5px;
  border: 1px solid #ccc;
  float: left;
  width: 180px;
}

div.gallery:hover {
  border: 1px solid #777;
}

div.gallery img {
  width: 100%;
  height: auto;
}

div.desc {
  padding: 15px;
  text-align: center;
}
</style>
</head>
<body>

<center><h1 style="background-color:black; color:white;">Image Gallery</h1></center>

<hr>
<br>
<!--@foreach($img as $i)
<div class="gallery">
  
    <img src="/images/{{ $i->image }}" alt="Cinque Terre" width="600" height="400">
  </a>
  <div class="desc">{{$i->id}}</div>
</div>
@endforeach
-->

<img src="/images/{{ $name }}" alt="Cinque Terre" width="600" height="400">
</body>
</html>