
<!DOCTYPE html>
<html>
<head>
	<title>login signup healthyme</title>
	<link rel="stylesheet" type="text/css" href="style%20login.css">
<link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
</head>
<body>
    
	<div class="main">  	
		<input type="checkbox" id="chk" aria-hidden="true">

			<div class="container">
    <div class="login-box">
    <div class="row">
    <div class="col-md-6 login-left">
        <h2> Login Here</h2>
        <form action="validation.php" method="post">
            <div class="form-group">
                <lable>Username</lable>
                <input type="text" name="user" class="form-control" required>
</div>


<div class="form-group">
                <lable>Password</lable>
                <input type="password" name="password" class="form-control" required>
</div>   
<button type="submit" class="btn btn-primary"> Login</button>
</form>
</div>

<div class="col-md-6 login-right">
        <h2> Register Here</h2>
        <form action="registration.php" method="post">
            <div class="form-group">
                <lable>Username</lable>
                <input type="text" name="user" class="form-control" required>
</div>


<div class="form-group">
                <lable>Password</lable>
                <input type="password" name="password" class="form-control" required>
</div>   
<button type="submit" class="btn btn-primary"> Register</button>
</form>
</div>

    </div>
	</div>
        </div>
    </div>
</body>
</html>