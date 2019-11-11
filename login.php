
<!DOCTYPE html>
<html>
<head>
<title>LOGIN FORM</title>   
    <link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <body>
        <div class ="loginbox">
        <img src="avatar.png" class="avatar">

        <h1>Login here</h1>
	
        <form method="post" action="log.php" >
        	
		<p>Username</p>
        	<input type="text" name="name" placeholder="Enter username">
        	<p>Password</p>
          	<input type="password" name="password" placeholder="Enter Password"> 
           	<input type="submit" name="login" value="Login">
	
		
            	<a href="#">Lost your password?</a><br>
            	<a href="#">Don't have an account?</a>
        </form>
	</div>
        </body>
</head>
</html>

