


<!DOCTYPE html>
<html>
    <title>Delete customer</title>
    <center><head><h1>ENTER THE CUSTOMER ID TO DELETE FROM THE LIST</h1>
	<style type="text/css">form{padding-top :120px;
			text-align :center;
			font-size :30px;}
		/*input{width :250px;
			height:30px;
			font-size:30px;	}*/
		h1{color:red;}
		h3{color:blue;}
	
	</style></head></center>
    <body bodycolor: grey>
	
    <form method="post" action="">
        
       <center> CUSTOMER-ID :<input type ="number" name="cid" placeholder="Customer id" ></center>
       
        <div>
		
		<button name="delete" style="width:10%;color=red;position: 'relative'; top:50%;bored-size:40px;border-radius:10pxborder: none;
    outline: none;
    height: 40px;
    background: aqua;
    color: back;
	justify-content: center;
	left:50%;
    font-size: 18px;
    border-radius: 20px;">Delete</button><br><br><br><br>
<?php
		$dbusername='root';
		$dbpassword='';
		$dbname='car';
		$host='localhost';
		$conn =  mysqli_connect("localhost" , "root" , "");
		mysqli_select_db($conn,"car");
		$p="";
		
	if(isset($_POST['delete']))
	{
			
			$res=mysqli_query($conn,"select c_id from customer where c_id = '$_POST[cid]'") ;
			while( $row = mysqli_fetch_assoc( $res))
			{
				$p=$row['c_id'];
				
			}
			if($p == $_POST['cid'])
			{
				mysqli_query($conn,"delete from customer where c_id = '$_POST[cid]'");
				echo "<p style= 'color: green; text-align:center'>"."employee details with $_POST[cid] deleted successfully"."</p>";
			
			}
				else
				{
					echo"<p style ='color: red ; text-align:center'>". " customer id is not exist"."</p>";
				}

$conn->close();
	}	
	
?>
		
		
	
	</div>
<br>
	<button name="back" style="width:10%;color=aqua;position: 'relative'; top:50%;bored-size:40px;border-radius:10pxborder: none;
    outline: none;
    height: 40px;
    background: aqua;
    color: back;
	justify-content: center;
	left:50%;
    font-size: 18px;
    border-radius: 20px;"><a href="employeview.php">Back</button></a>
    </form>
	
    </body>
</html>

