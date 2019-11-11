
<!DOCTYPE html>
<html>
    <title> emp</title>
    <center><head><h1>GENERAL FORM</h1>
	<style type="text/css">form{padding-top :120px;
			text-align :center;
			font-size :30px;}
		/*input{width :250px;
			height:30px;
			font-size:30px;	}*/
		h1{color:red;}
		h3{color:blue;}
	body{
		background-image:url('pic24.jpeg');
		background-color: grey;
	}
	
	</style></head></center>
    <body >

    <form method="post" action="">
        <center>NAME :<input type ="text" name="name" placeholder="name" ><br/></center>
       <center> EMAIL :<input type ="email" name="email" placeholder="email" ><br/></center>
       <center> PASSWORD :<input type ="password" name="password" placeholder="password" ><br/><center>
        
        <div><input type="submit" name="submit" value="insert"/>
		<input type="submit" name="update" value="update"/>
		<input type="submit" name="delete" value="delete"/>
		<input type="submit" name="search" value="search"/>
		<input type="submit" name="print" value="print"/>	
	
	</div>
    </form>
	<br/>
	
    </body>
</html>
<?php
		$dbusername='root';
		$dbpassword='';
		$dbname='login1';
		$host='localhost';
		$conn =  mysqli_connect("localhost" , "root" , "");
		mysqli_select_db($conn,"login1");
	if(isset($_POST['submit']))
	{		
	mysqli_query($conn,"INSERT INTO(name,email,password) 										values('$_POST[name]','$_POST[email]','$_POST[password]')");
		echo "inserted succesfully";
		/*$dbusername='root';
		$dbpassword='';
		$dbname='login1';
        
        	$conn1 = new mysqli($host , $dbusername , $dbpassword , $dbname);
		$sql="INSERT INTO login1 (name,email,password) values('$_POST[name]','$_POST[email]','$_POST[password]')";
		if($conn1->query($sql))
		{
			echo"new record inserted succesfully";
			$error="";
		}
		else
		{
		echo "new record is not inserted successfully\n<br/>";
		}*/

	}
	if(isset($_POST['delete']))
	{
		mysqli_query($conn,"delete from login1 where name = '$_POST[name]'");
		echo "deleted succesfully";
	}
		if(isset($_POST['update']))
	{
		mysqli_query($conn,"UPDATE login1 SET name = '$_POST[name]' where email = '$_POST[email]'");
		echo "updatedted succesfully";
	}
	if(isset($_POST['print']))
	{
		$res=mysqli_query($conn,"select * from login1 ");
		echo "<table border=1>";
		
		echo "<tr>";
		
		echo"<th>";echo "names";echo "</th>";
		echo"<th>";echo "email";echo "</th>";
		echo"<th>";echo "password";echo "</th>";
		echo"<tr>";
		while($row=mysqli_fetch_array($res))
		{
			
			echo "<tr>";
			echo"<td>";echo $row['name'];echo"</td>";
			echo"<td>";echo $row['email'];echo"</td>";
			echo"<td>";echo $row['password'];echo"</td>";
			echo "</tr>";			
		}	
		
	}
	if(isset($_POST['search']))
	{		
		$res=mysqli_query($conn,"select * from login1 where name = '$_POST[name]'" );
		//echo "inserted succesfully";
		//$res=mysqli_query($conn,"select * from login1 ");
		
		if($res==true)
		{
			echo "<table border=1>";
		
		echo "<tr>";
		
		echo"<th>";echo "names";echo "</th>";
		echo"<th>";echo "email";echo "</th>";
		echo"<th>";echo "password";echo "</th>";
		echo"<tr>";
		while($row=mysqli_fetch_array($res))
		{
			
			echo "<tr>";
			echo"<td>";echo $row['name'];echo"</td>";
			echo"<td>";echo $row['email'];echo"</td>";
			echo"<td>";echo $row['password'];echo"</td>";
			echo "</tr>";			
		}
		}
		else
		{
			echo "no row is selected";
		}	
	}
?>
