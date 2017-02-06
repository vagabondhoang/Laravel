<!DOCTYPE html>
<html>
<head>
	<title>master php</title>
	<meta charset="utf-8">
	<style type="text/css">
		.header{
			height: 60px;
			background: red;
		}
		.content{
			height: 200px;
			background: green;
		}
		.footer{
			height: 60px;
			background: yellow;
		}
	</style>
</head>
<body>
	<div class="header"></div>
	<div class="content">
		@yield('content')
	</div>
	<div class="footer"></div>
</body>
</html>