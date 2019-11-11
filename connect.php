<?php

$name = filter_input(INPUT_POST,'name');
$email = filter_input(INPUT_POST,'email');
$password= filter_input(INPUT_POST,'password');

if(!empty($name) && !empty( $email) && !empty($password))//!empty()
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
		$sql="INSERT INTO login1 (name,email,password) values('$name','$email','$password')";
		if($conn->query($sql))
		{
			$succes="new record inserted succesfully";
			$error="";
		}
		else
		{
		$error= "new record is not inserted successfully\n<br/>"+($con->error);
		}
		$conn->close();
	}
}
