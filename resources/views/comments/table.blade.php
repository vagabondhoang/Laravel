
<!DOCTYPE html>
<html>
<head>
	<title>table comments</title>
	<meta charset="utf-8">
</head>
<body>
	
	<div class="content">
		<h1>comments List</h1>
		<a href="http://localhost/demo/public/admin/comments/create">Them moi</a>
		<table border="1" cellspacing="0" cellpadding="10px" >
			<tr>
				<td>id</td>
				<td>is_active</td>
				<td>usersId</td>
				<td>user_name</td>
				<td>user_email</td>
				<td>comment</td>
				<td>created_on</td>
				<td>blogId</td>
			</tr>
			@foreach($comments as $item)
			<tr>
				<td>{{$item->id}}</td>
				<td>{{$item->is_active}}</td>
				<td>{{$item->usersId}}</td>
				<td>{{$item->user_name}}</td>
				<td>{{$item->user_email}}</td>
				<td>{{$item->comment}}</td>
				<td>{{$item->created_on}}</td>
				<td>{{$item->blogId}}</td>
			</tr>
			</tr>
			@endforeach
		</table>
	</div>
</body>
</html>

