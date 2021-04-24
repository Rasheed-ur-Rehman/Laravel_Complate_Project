<h1>This Is Login Page</h1>


<form method="POST" action="profile">
	@csrf
Name: 	<input type="text" name="user" placeholder="Enter User Name" >
Password:  <input type="Password" name="pass" placeholder="Enter Password">
<button type="submit" name="submit">Login</button>
</form>