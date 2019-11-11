
<!DOCTYPE html>
<html>
    <title>CAR DETAILS</title>
    <center><head><h1>ENTER THE CAR ID TO SEE THE INFORMATION</h1>
	<style type="text/css">form{padding-top :120px;
			text-align :center;
			font-size :30px;}
		
		h1{color:red;}
		h3{color:blue;}
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
		    
	</tr>--> <center> CAR-ID :<input type ="number" name="cid" placeholder="Car id" ></center>
	
      
       
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
		
	if(!empty($_POST['cid']))
	{	
		
			$sql = "SELECT  * FROM new_cars where model_id='$_POST[cid]'";
    			$result = $conn->query($sql);
    			if ($result->num_rows > 0)
			 {
   			 		 echo" <tr><th>"."Brand Name"."</th><th>"."Model_Name"."</th><th>"."Rating"."</th><th>"."Cost"."</th><th>"."Date of Release"."</th><th>"."</th></tr>";
   						 while($row = $result->fetch_assoc())
						 {
   			 							echo "<tr><td>" . $row["brand_name"]. "</td><td>" . $row["model_name"] . "</td><td>".$row["rating"] . "</td><td>". $row["cost"] . "</td><td>". $row["date_of_relese"] . "</td><td>" . "</td></tr>";
    						}
    			echo "</table>";
			echo"<br><br>";
			$conn->close();
			}
   		

			 else { echo"<p style='color:red'>"."car id doesnot exist"."<br>"; }
   		
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
    border-radius: 20px;"><a href="adminview.php">Back</a></button>

	
	</div>
    </form>
	<br/>
	
    </body>
</html>

