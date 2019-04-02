<!DOCTYPE html>
<html>
<head>
	<title></title>
	 <meta charset="utf-8">
	 <meta name="viewport" content="width=device-width, initial-scale=1">
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
     <link rel="stylesheet" type="text/css" href="{{asset('css')}}/style.css">
     <meta charset="utf-8">
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
     <style>
table,tr,th{
  border:1px solid black;
}
</style>
</head>
<body>
<center><h1>USER RECORD</h1></center>
<center> <table class="table table-dark">
<tr>
   <th style="color:Green;">Id</th>
   <th style="color:Green;">NAME</th>
   <th style="color:Green;">MOBILE_NO</th>
   <th style="color:Green;">USERNAME</th>
   <th style="color:Green;">PASSWORD</th>
   <th style="color:Green;">PINCODE</th>
   <th style="color:Green;">CATEGORIES</th>
   <th style="color:Green;">EMAIL</th>
   <th style="color:Green;">EDIT</th>
   <th style="color:Green;">DELETE</th>


</tr>
@foreach($details as $key => $data)
  
    <tr id="row_{{$data->id}}"> 
      <th>{{$data->id}}</th>      
      <th >{{$data->name}}</th>
      <th >{{$data->mno}}</th>
      <th >{{$data->username}}</th>
      <th >{{$data->password}}</th>
      <th >{{$data->pincode}}</th>
      <th >{{$data->categories}}</th>
      <th >{{$data->email}}</th>
      
      <th><a href="{{ route('my-edit', $data->id) }}">Edit</a></th>
       <th><a href="" data-id="{{$data->id}}" class="deletebtn">Delete</a></th>


    </tr>
    @endforeach
  </table>
    
</center>


<script>

$(".deletebtn").click(function(ev){
    var pointid = $(this).data('id');
//alert(pointid);

    $.ajax({
        url: '/front-page/' + pointid,
        type: 'DELETE',
        headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
        data:{pointid:pointid, method:'delete' ,"_token": "{{ csrf_token() }}"},
        success: function (response) {
        	//$('#row_'+pointid).hide();
        	alert(response);
        }
    });
})

</script>

</body>
</html>