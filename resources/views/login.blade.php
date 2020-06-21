<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="css/style1.css">

</head>
<body>
<!-- partial:index.partial.html -->
<form action="LoginSubmit" method="post">
    @csrf
    <div class="panel">
        <h2>LOGIN</h2>
        <div class="formset">
            <div class="form-group">
                <lable class="form-label">User Name</lable>
                <input name="email" class="form-control" type="text"/>
            </div>
            <div class="form-group">
                <lable class="form-label">Password</lable>
                <input name="password" class="form-control" type="password"/>
            </div>
            <button type="submit" class="btn">Log in</button>
</form>
<a href="#">Forgot Your Password?</a>
</div>
<form class="register-form"><i class="close">×</i>
    <a href="registeruser"><div class="formset">Click Here to signup</div></a>
    {{--        <h2>REGISTER</h2>--}}
    {{--        <div class="formset">--}}
    {{--            <div class="form-group">--}}
    {{--                <lable class="form-label">User Name</lable>--}}
    {{--                <input class="form-control" type="text"/>--}}
    {{--            </div>--}}
    {{--            <div class="form-group">--}}
    {{--                <lable class="form-label">Email</lable>--}}
    {{--                <input class="form-control" type="text"/>--}}
    {{--            </div>--}}
    {{--            <div class="form-group">--}}
    {{--                <lable class="form-label">Password</lable>--}}
    {{--                <input class="form-control" type="password"/>--}}
    {{--            </div>--}}
    {{--            <div class="form-group">--}}
    {{--                <lable class="form-label">Repeat Password</lable>--}}
    {{--                <input class="form-control" type="password"/>--}}
    {{--            </div>--}}
    {{--            <button class="btn">Log in</button>--}}
    </div>
</form>
</div>
<!-- partial -->
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src="js/script1.js"></script>

</body>
</html>
