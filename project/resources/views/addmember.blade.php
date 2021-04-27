<!DOCTYPE html>
<html>
<head>
	<title>Add Member</title>
</head>
<body>
	<h1>Add Members</h1>
	<form method="post" action="insert">
    @csrf
<input type="text" name="name" placeholder="Enter Your Name">
<input type="text" name="email" placeholder="Enter Your Email">
<input type="text" name="address" placeholder="Enter Adress">
<button type="submit">Insert</button>
	 </form>

</body>
</html>