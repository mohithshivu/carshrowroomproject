
<!DOCTYPE html>
<html>
<head>
<title>Customer sign or login</title>   
    <link rel="stylesheet" type="text/css" href="style1.css">

    <body>
        <div class ="loginbox">
        <img src="avatar.png" class="avatar">
        <h1>Sign Up Here</h1>
	<form method="post" action="" >
        	
		<p>Firstname</p>
        	<input type="text" name="Fname" placeholder="Enter the fname">
		<p>Lastname</p>
        	<input type="text" name="Lname" placeholder="Enter the Lname">
		<p>Email</p>
        	<input type="email" name="email" placeholder="Enter the Email">
        	<p>Password</p>
          	<input type="password" name="password" placeholder="Enter the Password"> 
           	<input type="submit" name="login" value="SignUp">
		<?php
	$fname =filter_input(INPUT_POST,'Fname');
	$lname =filter_input(INPUT_POST,'Lname');
	$email =filter_input(INPUT_POST,'email');
	$password =filter_input(INPUT_POST,'password');
if(isset($_POST['login']))
{	
if(!empty($fname))
{	
	if(!empty($lname))
	{
		if(!empty($email))
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
				
						
			
        
        					$conn1 = new mysqli($host , $dbusername , $dbpassword , $dbname);
								$sql="INSERT INTO customer_entry (fname,lname,email) 								values('$fname','$lname','$email')";
						if($conn1->query($sql))
						{
								echo"login succesfully";
								$error="";
								
								//$_['m_un']=$username;//login success
								header('Location: custmerview.php');	
						}
							else
							{
								echo"<p style='color:red';background-position:'center'>";
								echo " this email already exist\n<br/>".$conn1->error;
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
				echo "email sholud not be empty";
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
		
            	
		
		
        </form>
	</div>
        </body>
</head>
</html>

