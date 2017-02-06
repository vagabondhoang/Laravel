<h1>categories List</h1>

<table border="1" cellspacing="0" cellpadding="10px" >
	<tr>
		<td>id</td>
		<td>title</td>
		<td>isDeleted</td>
	</tr>
	@foreach($categories as $item)
	<tr>
		<td>{{$item->id}}</td>
		<td>{{$item->title}}</td>
		<td>{{$item->isDeleted}}</td>
	</tr>
	@endforeach
</table>

