<!DOCTYPE html>
<html>
<head>
	<title>User Login</title>
</head>
<body>
<form action="users" method="post">
	@csrf
	<input type="text" name="user" placeholder="Enter User name">
	<br><br>
	<input type="password" name="password" placeholder="Enter Password">
	<br><br>
	<button type="submit">Login</button>

</form>
</body>
</html>
