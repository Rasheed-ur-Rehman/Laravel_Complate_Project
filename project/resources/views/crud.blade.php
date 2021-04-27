<form method="post">
	@csrf
<table border="1">
	<tr>
		<td>Name</td>
		<td>Email</td>
		<td>Address</td>
		<td>Action</td>
	</tr>

@foreach($show as $crud)
<tr>
		<td>{{$crud['name']}}</td>
		<td>{{$crud['email']}}</td>
		<td>{{$crud['address']}}</td>
		<td><a href={{"delete/".$crud['id']}}>Delete</a>
	    <a href={{"update/".$crud['id']}}>Update</a></td>
</tr>

@endforeach

</table>

</form>

