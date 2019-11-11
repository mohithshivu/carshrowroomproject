
<!DOCTYPE html>
<html>
<head>
<title>Customer Login</title>   
    <link rel="stylesheet" type="text/css" href="style1.css">

    <body>
        <div class ="loginbox">
        <img src="avatar.png" class="avatar">
        <h1>Login Here</h1>
	<form method="post" action="" >
        	
		<p>First Name</p>
        	<input type="text" name="Fname" placeholder="Enter the fname">
		<p>Last Name</p>
        	<input type="text" name="Lname" placeholder="Enter the Lname">
		<p>Customer Id</p>
        	<input type="number" name="cid" placeholder="Enter the Custmer Id">
        	<p>Password</p>
          	<input type="password" name="password" placeholder="Enter the Password"> 
           	<input type="submit" name="login" value="Login">
		<?php
	$fname =filter_input(INPUT_POST,'Fname');
	$lname =filter_input(INPUT_POST,'Lname');
	$cid =filter_input(INPUT_POST,'cid');
	$password =filter_input(INPUT_POST,'password');
if(isset($_POST['login']))
{	
if(!empty($fname))
{	
	if(!empty($lname))
	{
		if(!empty($cid))
		{
			if(!empty($password))
			{
				
					
						
						if(isset($_POST['login']))
						{
						$host='localhost';
						$dbusername='root';
						$dbpassword='';
						$dbname='car';
						//creating connection
						$p='';
						
			
        
        					$conn1 = new mysqli($host , $dbusername , $dbpassword , $dbname);
						
								$sql="SELECT password FROM customer_pro where c_id='$_POST[cid]' and password='$_POST[password]'";
						$res=$conn1->query($sql);
						
						while($row = $res->fetch_assoc()) {
							$p=$row['password'];
						
						}
						if($p == $_POST['password'])
						{
								echo"login succesfully";
								$error="";
								session_start();
								//$_['m_un']=$username;//login success
								header('Location: custmerview.php');	
						}
							else
							{
								echo"<p style='color:red';background-position:'center'>";
								echo " password is incorrect\n<br/>".$conn1->error;
								echo"</p>";
							}
						}	
					
				
			
								$conn1->close();						
			}
						else
					{
						echo "password sholud not be empty";
						die();
					}
		}
				else
				{	
				echo "cid sholud not be empty";
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
		
            	<a href="cforgotpassword.php">Forgot password?</a><br>
            	
		
		
        </form>
	</div>
        </body>
</head>
</html>

