<?php
	$host="localhost"; // Host name
	$username="root"; // Mysql username$password=""; // Mysql password
	$db_name="showroom"; // Database name
	$tbl_name1="emp"; // Table name
	$tbl_name2="emp_pro";
	// Connect to server and select database.
	$conn=mysqli_connect("$host", "$username", "$password")or die("cannot connect");
	mysqli_select_db($conn,"showroom")or die("cannot select DB");
	// Get values from form
	$emp_id=$_POST['emp_id'];
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$dob=$_POST['dob'];
	$join_date=$_POST['join_date'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
	$address=$_POST['address'];
	$salary=$_POST['salary'];
	// Insert data into mysql
	$sql1="INSERT INTO $tbl_name1(emp_id,fname,
	lname,dob,join_date)VALUES('$emp_id','$fname', '$lname', '$dob','$join_date')";
	$result1=mysqli_query($conn,$sql1);
	$sql2="INSERT INTO $tbl_name2(emp_id,email,
	phone,address,salary)VALUES('$emp_id','$email', '$phone', '$address','$salary')";
	$result2=mysqli_query($conn,$sql2);
	// if successfully insert data into database, displays message "Successful".
	if($result1 && $result2){
	echo "Record inserted successfully";	

	echo "<BR>";
	echo "<a href='emp_form.php'>Back to main page</a>";
	}
	else {
	echo "Entered Employee ID already exists!";
	}
	?>
	<?php
	// close connection
	mysqli_close($conn);
?>
