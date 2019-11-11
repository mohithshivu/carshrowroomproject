<?php

$name = filter_input(INPUT_POST,'name');
//$email = filter_input(INPUT_POST,'email');
$password= filter_input(INPUT_POST,'password');
$error="";
$success="";
if(!empty($name) && !empty($password))//!empty()
{

	if($_POST['login'])
	{
	
	$host='localhost';
	$dbusername='root';
	$dbpassword='';
	$dbname='login1';
	$conn = new mysqli($host , $dbusername , $dbpassword , $dbname);
	if(mysqli_connect_error())
	{
		die('Connect Error ('.mysqli_connect_errno().')'.mysqli_connect_error());
	}
	else
	{
				$sql= "SELECT * FROM login1
				WHERE (name  = '$name')";
			
					$result = mysqli_query($conn,$sql);
				
					while( $row = mysqli_fetch_assoc( $result))
					{
					$pwFromDB=$row['password'];

					}	
					if($pwFromDB == $password)
					{
						session_start();
						echo "login succesfully";
						$success="login succesfully";
						$error ="";
						header('Location:f.php');
					}
					else
					{
						$error= "invalid password\n<br/>";
						$success="";	
						//header('Location:login.php');
					}
			$conn->close();
		}
	}
}
else
{	echo"<p style='color:red'; positon:'center'; text-align:'center';>";
	echo "all fields are compalsory";
	echo "</p>";
}			
?>
