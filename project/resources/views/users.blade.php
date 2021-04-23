<h1>User List</h1>

<table border="1" style="border-color: red" >
	<tr>
		<td>ID</td>
		<td>F_Name</td>
		<td>L_Name</td>
		<td>Email</td>

		<td>Profile Photo</td>
	</tr>

	@foreach ($coll as $item )
	<tr>
		<td>{{$item['id']}}</td>
		<td>{{$item['first_name']}}</td>
		<td>{{$item['last_name']}}</td>
		<td>{{$item['email']}}</td>
		
		<td><img src="{{$item['avatar']}}"></td>
	</tr>
	@endforeach 
</table>