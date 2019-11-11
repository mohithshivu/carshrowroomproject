
<!DOCTYPE html>
<html>
    <title>NEW CAR DETAILS</title>
    <center><head><h1>ENTER THE CAR BRAND AND MODEL NAME TO SEE THE INFORMATION</h1>
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
		    
	</tr>--> <center> BRAND NAME :<input type ="text" name="bid" placeholder="Brand name" ></center>
		<center> MODEL NAME :<input type ="text" name="mid" placeholder="Model name" ></center>
      
       
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
	if(!empty($_POST['bid']))
	{	if(!empty($_POST['mid']))
		{	
		
			$sql = "SELECT  * FROM veh_list where vname='$_POST[bid]' and vmodel='$_POST[mid]'";
    			$result = $conn->query($sql);
    			if ($result->num_rows > 0)
			 {
   			 		 echo" <tr><th>"."Brand_name"."</th><th>"."Model_Name"."</th><th>"."Colour"."</th><th>"."Price"."</th></tr>";
   						 while($row = $result->fetch_assoc())
						 {
   			 							echo "<tr><td>" . $row["vname"]. "</td><td>" . $row["vmodel"]. "</td><td>". $row["color"] . "</td><td>".$row["price"] . "</td></tr>";
break;
    						}
    			echo "</table>";
			echo"<br><br>";
			}
   			else { echo"<p style='color:red'>"."brand name and model name doesnot exist"; }
			 
		}
		else
		{
			echo"Please enter the brand name";
			echo"<br/><br/>";
		}
	}
	else
	{
		echo"Please enter the model name";
		echo"<br/><br/>";
	}

$conn->close();
}	
?>	
		

	<br><br><button name="back" style="width:10%;color=aqua;position: 'relative'; top:50%;bored-size:40px;border-radius:10pxborder: none;
    outline: none;
    height: 40px;
    background: aqua;
    color: back;
	justify-content: center;
	left:50%;
    font-size: 18px;
    border-radius: 20px;"><a href="custmerview.php">Back</button></a>

	
	</div>
    </form>
	<br/>
	
    </body>
</html>

