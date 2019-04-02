<!DOCTYPE html>
<html lang="en">
<head>
  <title>Navigation</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <style>
   .dropdown-toggle::after {
    display:none;
}


</style>
</head>

<body>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <!-- Brand -->
  <a class="navbar-brand" href="#">{{$details[0]->title}}</a>

  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="#">{{$details[1]->title}}</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">{{$details[2]->title}}</a>
    </li>

    <!-- Dropdown -->
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Country
      </a>
      <div class="dropdown-menu">
        @foreach($details as $item)
        <a class="dropdown-item" value="{{ $item->id }}">{{ $item->country}}</a>
         @endforeach
      </div>
    </li>
  </ul>
</nav>
<br>
  
<div class="container">
  <h3>Pankaj Joshi</h3>
  <p>Dynamic Navigation Bar</p>
</div>





 










































 
 </body>
 </html>