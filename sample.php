
<!DOCTYPE html>
<html>
    <title>my form</title>
    <center><head><h1>GENERAL FORM</h1>
	<style type="text/css">form{padding-top :120px;
			text-align :center;
			font-size :30px;}
		/*input{width :250px;
			height:30px;
			font-size:30px;	}*/
		h1{color:red;}
		h3{color:blue;}
	
	</style></head></center>
    <body bgcolor ="gray">

    <form method="post" action="">
        <center>FNAME :<input type ="text" name="fname" placeholder="name" ><br/></center>
       <center> LNAME:<input type ="text" name="lname" placeholder="email" ><br/></center>
       <center> EMAIL :<input type ="email" name="email" placeholder="password" ><br/><center>
        
        <div><input type="submit" name="submit" value="insert"/>
		
	
	</div>
    </form>
	<br/>
	
    </body>
</html>
<?php
		$dbusername='root';
		$dbpassword='';
		$dbname='car';
		$host='localhost';
		$conn =  mysqli_connect("localhost" , "root" , "");
		mysqli_select_db($conn,"car");
	if(isset($_POST['submit']))
	{		
	/*mysqli_query($conn,"INSERT INTO customer_entry(fname,lname,email										values('$_POST[fname]','$_POST[lname]','$_POST[email]')");
		echo "inserted succesfully";*/
		$dbusername='root';
		$dbpassword='';
		$dbname='car';
        
        	$conn1 = new mysqli($host , $dbusername , $dbpassword , $dbname);
		$sql="INSERT INTO customer_entry (fname,lname,email) values('$_POST[fname]','$_POST[lname]','$_POST[email]')";
		if($conn1->query($sql))
		{
			echo"new record inserted succesfully";
			$error="";
		}
		else
		{
		echo "new record is not inserted successfully\n<br/>".$conn1->error;
		}

	}

?>
