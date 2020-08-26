<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
</head>
<body>

	<h1>Welcome home!</h1>


	<h2>user list</h2>

	<table border="1">
		<tr>
			<td>ID</td>
			<td>Name</td>
			<td>Email</td>
			<td>Password</td>
			<td>Action</td>
		</tr>

	@foreach($users as $user)
		<tr>
			<td>{{$user['id']}}</td>
			<td>{{$user['name']}}</td>
			<td>{{$user['email']}}</td>
			<td>{{$user['password']}}</td>
			<td>
				<a href="/home/edit/{{$user['id']}}">Edit</a> |
				<a href="/home/delete/{{$user['id']}}">Delete</a> |
				<a href="/home/details/{{$user['id']}}">Details</a> |
			</td>
		</tr>
	@endforeach
	</table>

</body>
</html>