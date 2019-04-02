<!DOCTYPE html>
<html>
<head>
	<title>Files</title>
</head>
<body>
<form enctype="multipart/form-data" method="post" action="/my-page">
@csrf
<input type="file" name="bookcover">
<input type="submit">
</body>
</html>