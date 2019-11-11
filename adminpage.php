
<!DOCTYPE html>
<html>
<head>
<title>Admin Sign Up</title>   
    <link rel="stylesheet" type="text/css" href="style1.css">

    <body>
        <div class ="loginbox">
        <img src="avatar.png" class="avatar">
        <h1>Login </h1>
	<form method="post" action="" >
        	
		<p>Username</p>
        	<input type="text" name="name" placeholder="Enter the username">
		<p>Admin id</p>
          	<input type="number" name="a_id" placeholder="Enter the admin-id"> 
        	<p>Password</p>
          	<input type="password" name="password" placeholder="Enter the Password"> 
           	<input type="submit" name="login" value="Login">
		<?php
	$username =filter_input(INPUT_POST,'name');
	$adminid =filter_input(INPUT_POST,'a_id');
	$password =filter_input(INPUT_POST,'password');
	
	if(isset($_POST['login']))
	{	
	if(!empty($username))
	{
		if(!empty($adminid))
		{
			if(!empty($password))
			{
			$host="localhost";
			$dbusername="root";
			$dbpassword="";
			$dbname="car";
			$pwFromDB="";
			//creating connection
			$conn = new mysqli($host , $dbusername , $dbpassword , $dbname);
			
			if(mysqli_connect_error())
			{
				die('Connect Error 	('.mysqli_connect_errno().')'.mysqli_connect_error());

			}
			else
			{
			$sql1= "SELECT * FROM admin
			WHERE username  = '$username' and admini_d ='$adminid' ";
			
			$result = mysqli_query($conn,$sql1);
			//echo "shivu";
			//echo $sql1;
			while( $row = mysqli_fetch_assoc( $result))
			{
				$pwFromDB=$row['password'];
				//echo "mohith";
			}
			if($pwFromDB == $password)
			{
				session_start();
				//$_['m_un']=$username;//login success
				header('Location: adminview.php');	
				echo "login succesfully";
			}
			else
			{
				//login fail;
				//header('Location: adminpage.php');
				echo "<p style=color:red>"."password is incorrect"."<br>";
			}
			$conn->close();
			}
		}
		else
		{
			echo "<p style:color:red>"."password sholud not be empty";
			
		}
	
	}
	else
		{
			echo "adminid sholud not be empty";
			
		}
	}
	
else
{
	echo "user name  sholud not be empty";
			
}
}
?>
	
		
            	<a href="aforgotpassword.php">Forgot password?</a><br>
            	
        </form>
	</div>
        </body>
</head>
</html>

			
			
