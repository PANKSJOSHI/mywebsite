<!DOCTYPE html>
<html>
<head>
	<title>Joins</title>
	 <meta charset="utf-8">
	 <meta name="viewport" content="width=device-width, initial-scale=1">
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
     <link rel="stylesheet" type="text/css" href="{{asset('css')}}/style.css">
     <meta charset="utf-8">
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<style>
	table tr td{

		text-align: center;
		border:4px solid red;

	}
	</style>
</head>
<body>
<center><h1>Joins</h1><br>
<table class="table" style="border:1px solid green;">


<tr class="success">
   <h4><td>Employee Name</td>
   <td>Emplyee Mobile No</td>
   <td>Customer Mobile No</td></h4>
 </tr>


 <tr class="info">

    <td>{{$users[0]->e_name}}</td>
    <td>{{$users[0]->e_mno1}}</td>
    <td>{{$users[0]->c_mno2}}</td>

    </tr>
    </table></center>
</body>
</html>