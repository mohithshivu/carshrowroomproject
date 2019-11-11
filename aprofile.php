
<!DOCTYPE html>
<html>
    <title>Admin Profile</title>
    <center><head><h1> ADMIN  INFORMATION</h1>
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

		
       
       
        <div>
		
		
		<?php
		$dbusername='root';
		$dbpassword='';
		$dbname='car';
		$host='localhost';
		$conn =  mysqli_connect("localhost" , "root" , "");
		mysqli_select_db($conn,"car");
		
		
		
			$sql = "SELECT  * FROM admin ";
    			$result = $conn->query($sql);
    			if ($result->num_rows > 0)
			 {
   			 		 echo" <tr><th>"."Admin_Id"."</th><th>"."Admin_Name"."</th><th>"."car showroom id"."</th><th>"."last login time "."<th>"."Email"."</th>"."</th></tr>";
   						 while($row = $result->fetch_assoc())
						 {
   			 							echo "<tr><td>" . $row["admini_d"]. "</td><td>" . $row["username"] . "</td><td>".$row["c_id"] ."</td><td>".$row["datetime"] . "</td><td>".$row["email"] ."</td></tr>";
    						}
    			echo "</table>";
			echo "<br><br><br>";
			}
   		
			 else { echo"<p style='color:red'>"."admin id doesnot exist"."<br><br><br>"; }
   		$conn->close();
	
		
?>	

	
	<button name="back" style="width:10%;color=aqua;position: 'relative'; top:50%;bored-size:40px;border-radius:10pxborder: none;
    outline: none;
    height: 40px;
    background: aqua;
    color: back;
	justify-content: center;
	left:50%;
    font-size: 18px;
    border-radius: 20px;"><a href="adminview.php">Back</a></button>

	
	</div>
    </form>
	<br/>
	
    </body>
</html>
