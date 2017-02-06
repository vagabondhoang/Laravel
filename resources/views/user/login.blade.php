
<!DOCTYPE html>
<html>
<head>
    <title>form login laravel</title>
    <style type="text/css">
        body{
            background: #5C97BD;
        }
        form{
            margin-left: 40%;
            margin-top: 10%;
        }
        input[type=text], input[type=password]{
            padding: 10px;
            width: 350px;
            border-radius: 10px;
            border: none;
            font-size: 20px;
        }
        input[type=submit] {
            padding: 10px;
            width: 375px;
            border-radius: 10px;
            background: #E7505A;
            color: #F1B4CC;
            border: none;
            font-size: 20px;
        }
        form span{
            font-size: 20px;
        }
        form button{
            border: 1px solid #69A2C5;
            margin-left: 10%;
            padding: 10px;
            font-size: 20px;
            border-radius: 5px;
        }
        span.right{
            margin-left: 100px;
        }
    </style>

</head>
<body>
    <form action="loginMe" method="post">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <input type="text" name="name" placeholder="name"><br><br>
        <input type="password" name="password" placeholder="password"><br><br>
        <input type="submit" name="login" value="login"><br><br>
        <input type="checkbox" name=""><span>Remember me</span>
        <span class="right">Forgot Password</span><br><br>
        <button>Create an account</button>
    </form>
</body>
</html>