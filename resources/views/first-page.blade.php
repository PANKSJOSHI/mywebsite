<!DOCTYPE html>
<html lang="en">
<head>
      <title>User Form</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
      <link rel="stylesheet" type="text/css" href="{{asset('css')}}/style.css">
</head>
<body>
      <center><button class="button"><span><h3>USER FORM</h3> </span></button></center>
      <div style="background-color: black;color:white; height:10%;">

          <h3><marquee>Welcome in My Page</marquee></h3>
          <hr>
          <center> {{ Auth::user()->name }}   &nbsp;&nbsp;&nbsp;<a href="{{ route('logout') }}"">logout</a></center>
      </div>
    
    <div class="container" style="float:center;border:2px solid black;width:50%;background-color:#F5F5DC">
  
     <form  method="post" action="/user-page"  class="needs-validation" novalidate>

            @csrf
        <div class="form-group">
             <label for="name">Name:</label>
             <input type="text" class="form-control" id="name" placeholder="Enter username" name="name" required style="width:50%;">
              <div class="valid-feedback">Valid.</div>
              <div class="invalid-feedback">Please fill out this field.</div>
          </div>
        <div class="form-group">
              <label for="email">Email:</label>
              <input type="Email" class="form-control" id="email" placeholder="Enter email" name="email" required style="width:50%;">
              <div class="valid-feedback">Valid.</div>
              <div class="invalid-feedback">Please fill out this field.</div>
        </div>
        <div class="form-group">
              <label for="mno">Mobile No:</label>
              <input type="number" class="form-control" id="mno" placeholder="Enter mobile no" name="mno" required style="width:50%;">
              <div class="valid-feedback">Valid.</div>
              <div class="invalid-feedback">Please fill out this field.</div>
       </div>
       <div class="form-group">
              <label for="username">User Name:</label>
              <input type="text" class="form-control" id="username" placeholder="Enter username" name="username" required style="width:50%;">
              <div class="valid-feedback">Valid.</div>
              <div class="invalid-feedback">Please fill out this field.</div>
      </div>
      <div class="form-group">
              <label for="password">Password:</label>
              <input type="password" class="form-control" id="password" placeholder="Enter password" name="password" required style="width:50%;">
              <div class="valid-feedback">Valid.</div>
              <div class="invalid-feedback">Please fill out this field.</div>
      </div>
       <div class="form-group">
              <label for="pincode">PinCode:</label>
              <input type="number" class="form-control" id="pincode" placeholder="Enter Pincode" name="pincode" required style="width:50%;">
              <div class="valid-feedback">Valid.</div>
              <div class="invalid-feedback">Please fill out this field.</div>
       </div>
       <div class="form-group">
               <label for="gender">Gender:</label>
                <select name="categories" id="categories" class="form-control" style="width:50%;">
                           @foreach($gender as $item)
                                 <option value="{{ $item->name }}">{{ $item->name }}</option>
                           @endforeach
                </select>
                  <div class="valid-feedback">Valid.</div>
                 <div class="invalid-feedback">Please fill out this field.</div>
        </div>
       <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

    <script>

        (function() {
          'use strict';
          window.addEventListener('load', function() {
           
            var forms = document.getElementsByClassName('needs-validation');
            
            var validation = Array.prototype.filter.call(forms, function(form) {
              form.addEventListener('submit', function(event) {
                if (form.checkValidity() === false) {
                  event.preventDefault();
                  event.stopPropagation();
                }
                form.classList.add('was-validated');
              }, false);
            });
          }, false);
        })();
</script>

</body>
</html>
