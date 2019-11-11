<?php
$id =$_post['id'];
$username =$_post['username'];
$email = $_post['email'];
$gender =$_post['gender'];
$password =$_post['password'];
$phonecode =$_post['phone code'];
$phone =$_post['phone'];

if(!empty($username) || !empty($id) || !empty($email) || !empty($u) || !empty($gender) || !empty($phonecode) ||!empty($phone) )
{

	$host="localhost";
	$dbUsername="root";
	$dbPassword="":
	$dbname ="youtube";
	$conn=new mysqli($host
	$dbUsername
	$dbPassword
	$dbname );
	if(mysqli_coonect_error())
	{
		die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_er());
	}
	else
	{
		$SELECT="SELECT email FROM application where email = ? List 1";
		$insert ="insert into application (id,name,email,gender,password,phonecode,phone)
		values(?,?,?,?,?,?,?)";
	$stmt=$conn->prepare($select);
	$stmt->bindbind->param("s",$email);
	$stmt->execute();
	$stmt->bind_result($email);
	$stmt->store_result();
	$rnum=$stmt->num_rows;
	if($rnum==0)
		$stmt->close();
	$stmt=$conn->prepare($insert);
	$stmt->bind_param("sssii",$username,$password,$gender,$email,$phonecode,$phone);
	$stmt->execute();
	echo "record submitted succefully";
	}
	else
	{
	echo "record is not submitted succefully"
	}

?>


