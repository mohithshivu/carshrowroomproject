
<!DOCTYPE html>
<html>
    <title>Customer Profile</title>
    <center><head><h1>ENTER THE CUSTOMER ID TO SEE THE INFORMATION</h1>
	<style type="text/css">form{padding-top :120px;
			text-align :center;
			font-size :30px;}
		
		h1{color:red;}
		h2{color:blue;}
		body{
		background-image:url('pic24.jpeg');
		background-color: white;
	}
	 table {
    border-collapse: collapse;
    width: 100%;
    color: #588c7e;
    font-family: monospace;
    font-size: 25px;
    text-align: left;
    }
    th {
    background-color: #588c7e;
    color: white;
    }
    tr:nth-child(even) {background-color: #f2f2f2}
	</style></head></center>
    <body>
	
    <form method="post" action="">
         <table>
    <!--<tr>
    <th>Admin_Id</th>
    <th>Admin_Name</th>
    <th>Password</th>
		    
	</tr>-->
<center> CUSTOMER-ID :<input type ="number" name="cid" placeholder="Customer id" ></center>
		
       
       
        <div>
		
		<button name="view" style="width:10%;color=red;position: 'relative'; top:50%;bored-size:40px;border-radius:10pxborder: none;
   	 outline: none;
    	height: 40px;
    	background: aqua;
    	color: back;
	justify-content: center;
	left:50%;
   	 font-size: 18px;
   	 border-radius: 20px;">view</button><br><br><br>
		
		<?php
		$dbusername='root';
		$dbpassword='';
		$dbname='car';
		$host='localhost';
		$conn =  mysqli_connect("localhost" , "root" , "");
		mysqli_select_db($conn,"car");
	if(isset($_POST['view']))
	{	
	if(!empty($_POST['cid']))
	{	
		
			$sql = "SELECT  * FROM customer where c_id='$_POST[cid]'";
    			$result = $conn->query($sql);
    			if ($result->num_rows > 0)
			 {
   			 		 echo" <tr><th>"."Customer_Id"."</th><th>"."First_Name"."</th><th>"."Last_Name"."</th><th>"."Dob"."</th><th>"."Email"."</th><th>"."address"."</th></tr>";
   						 while($row = $result->fetch_assoc())
						 {
   			 							echo "<tr><td>" . $row["c_id"]. "</td><td>" . $row["fname"] . "</td><td>".$row["lname"]. "</td><td>".$row["dob"]. "</td><td>".$row["email"]. "</td><td>".$row["addr"] . "</td></tr>";
    						}
    			echo "</table>";
			echo "<br><br><br>";
			}
   		
			 else { echo"<p style='color:red'>"."customer id $_POST[cid] doesnot exist"."<br><br><br>"; }
   		
	}
}		
?>	

	<button name="back" style="width:10%;color=aqua;position: 'relative'; top:50%;bored-size:40px;border-radius:10pxborder: none;
    outline: none;
    height: 40px;
    background: aqua;
    color: back;
	justify-content: center;
	left:50%;
    font-size: 18px;
    border-radius: 20px;"><a href="managerview.php">Back</a></button>

	
	</div>
    </form>
	<br/>
	
    </body>
</html>

