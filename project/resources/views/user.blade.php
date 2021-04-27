<!DOCTYPE html>
<html>
<head>
	<title>User Login</title>
</head>
<body>
<form action="users" method="post">
	@csrf
	<input type="text" name="name" placeholder="Enter User name">
	<br><br>
	<input type="text" name="email" placeholder="Enter email">
	<br><br>
	<input type="text" name="address" placeholder="address"><br>
	<button type="submit">Login</button>

</form>
</body>
</html>
