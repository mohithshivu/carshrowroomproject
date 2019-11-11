<?php
	$username =filter_input(INPUT_POST,'name');
	$password =filter_input(INPUT_POST,'password');
	
		
	if(!empty($username))
	{
		if(!empty($password))
		{
			$host="localhost";
			$dbusername="root";
			$dbpassword="";
			$dbname="contactme";
		//creating connection
		$conn = new mysqli($host , $dbusername , $dbpassword , $dbname);
		
		if(mysqli_connect_error())
		{
			die('Connect Error ('.mysqli_connect_errno().')'.mysqli_connect_error());

		}
		else
		{
			$sql1= "SELECT password FROM contactinfo
			WHERE name  = '$username'";
			//$result2 = mysql_query("SELECT password FROM contactinfo
			//WHERE name  = '$username'");
			$result = mysqli_query($conn,$sql1);
			//echo "shivu";
			while( $row = mysqli_fetch_assoc( $result))
			{
				$pwFromDB=$row['password'];
				//echo "mohith";
			}
			if($pwFromDB == $password)
			{
				session_start();
				//$_['m_un']=$username;//login success
				header('Location: enter.php');	
				echo "login succesfully";
			}
			else
			{
				//login fail;
				header('Location: fail.php');
				echo "password is incoorect";
			}
			/*$sql = "INSERT INTO contactinfo( name , password )
				VALUES('$username','$password')";
			
			
			if($conn->query($sql))
			{
				echo " New record is inserted succesfully";
			}
			else
			{
				echo "ERROR ".$sql."<br>".$conn->error;
			}*/
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
			echo "username sholud not be empty";
			die();
		}

?>

