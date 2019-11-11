
<!DOCTYPE html>
<html>
<head>
<title>Employee Log in</title>   
    <link rel="stylesheet" type="text/css" href="style1.css">

    <body>
        <div class ="loginbox">
        <img src="avatar.png" class="avatar">
        <h1>Login Here</h1>
	<form method="post" action="" >
        	
		<p>Firstname</p>
        	<input type="text" name="Fname" placeholder="Enter the fname">
		<p>Lastname</p>
        	<input type="text" name="Lname" placeholder="Enter the Lname">
		<p>Employee id</p>
          	<input type="number" name="e_id" placeholder="Enter the employee-id"> 
        	<p>Password</p>
          	<input type="password" name="password" placeholder="Enter the Password"> 
           	<input type="submit" name="login" value="Login">
	<?php
	$fname =filter_input(INPUT_POST,'Fname');
	$lname =filter_input(INPUT_POST,'Lname');
	$eid =filter_input(INPUT_POST,'e_id');
	$password =filter_input(INPUT_POST,'password');
	$pbFromDB="";
if(isset($_POST['login']))
{
if(!empty($fname))
{	
	if(!empty($lname))
	{
		if(!empty($eid))
		{
			if(!empty($password))
			{
				$host="localhost";
				$dbusername="root";
				$dbpassword="";
				$dbname="car";
				$p="";
					//creating connection
				$conn = new mysqli($host , $dbusername , $dbpassword , $dbname);
		
				if(mysqli_connect_error())
				{
					die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());

				}
				else
				{
				$sql1= "SELECT * FROM employee
				WHERE (fname  = '$fname' and lname = '$lname' and e_id='$eid')";
			
				$result = mysqli_query($conn,$sql1);
				
					while( $row = mysqli_fetch_assoc( $result))
					{
						$p=$row['password'];
					}
					if($p == $password)
					{
						session_start();
							//$_['m_un']=$username;//login success
						header('Location: employeview.php');	
						echo "login succesfully";
					}
						else
						{
							//login fail;
						
						echo "<P style='color:red';background-position:center>"."password is incorrect"."<br>";
						}
			
					$conn->close();
				}
			}
		
						else
						{
						echo "password sholud not be empty";
						die();
						}
				
	
		}
				else
				{
					echo "mid sholud not be empty";
					die();
				}
	}	
		else
		{
		echo "lname sholud not be empty";
			die();
		}
}
else
{
	echo "fname sholud not be empty";
			die();
}	
}		
?>
		
            	<a href="eforgotpassword.php">Forgot password?</a><br>
            	
			
        </form>
	</div>
        </body>
</head>
</html>

