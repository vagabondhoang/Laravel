<form action="http://localhost/demo/public/admin/comments/save" method="post">
	<input type="hidden" name="_token" value="{{csrf_token()}}">
	is_active:<input type="text" name="is_active"><br>
	usersId:<input type="text" name="usersId" /><br>
	user_name:<input type="text" name="user_name"><br>
	user_email:<input type="text" name="user_email" /><br>
	comment:<input type="text" name="comment"><br>
	created_on:<input type="text" name="created_on" /><br>
	blogId:<input type="text" name="blogId"><br>
	<input type="submit" name="btnSubmit" value="Them moi" />
</form>