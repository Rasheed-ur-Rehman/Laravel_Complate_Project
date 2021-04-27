<h1>this is update Page</h1>
<form method="post" action="/update">
	@csrf
	<input type="hidden" name="id" value="{{$updatedata['id']}}">
	Name : <input type="text" name="name" value="{{$updatedata['name']}}">
	Email : <input type="text" name="email" value="{{$updatedata['email']}}">
	Address : <input type="text" name="address" value="{{$updatedata['address']}}">
	<button type="submit">Update</button>

</form>