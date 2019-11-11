
<!DOCTYPE html>
<html>
    <title>delete manager</title>
    <center><head><h1>ENTER THE MANAGER ID TO DELETE FROM THE LIST</h1>
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
		background-color: white;
	}
	</style></head></center>
    <body bodycolor: grey>
	
    <form method="post" action="">
        
       <center> MANAGER-ID :<input type ="number" name="mid" placeholder="Manager id" ></center>
       
        <div>
		
		<button name="delete" style="width:10%;color=red;position: 'relative'; top:50%;bored-size:40px;border-radius:10pxborder: none;
    outline: none;
    height: 40px;
    background: aqua;
    color: back;
	justify-content: center;
	left:50%;
    font-size: 18px;
    border-radius: 20px;">Delete</button><br><br>
		<?php
		$dbusername='root';
		$dbpassword='';
		$dbname='car';
		$host='localhost';
		$conn =  mysqli_connect("localhost" , "root" , "");
		mysqli_select_db($conn,"car");
		$idFromDB="";
		
	if(isset($_POST['delete']))
	{
			
			$res=mysqli_query($conn,"select manager_id from manager where manager_id = '$_POST[mid]'") ;
			while( $row = mysqli_fetch_assoc( $res))
			{
				$idFromDB=$row['manager_id'];
				
			}
			
			if($idFromDB == true)
			{
				mysqli_query($conn,"delete from manager where manager_id = '$_POST[mid]'");
				echo "<p style= 'color: green; text-align:center'>"."Manager details with $_POST[mid] deleted successfully"."</p>";
			
			}
				else
				{
					echo"<p style ='color: red ; text-align:center'>". " Manager id $_POST[mid] is not exist"."</p>"."<br>";
				}

$conn->close();
	}	
	
?><br><a href="adminview.php"><button name="back" style="width:10%;color=aqua;position: 'relative'; top:50%;bored-size:40px;border-radius:10pxborder: none;
    outline: none;
    height: 40px;
    background: aqua;
    color: back;
	justify-content: center;
	left:50%;
    font-size: 18px;
    border-radius: 20px;">
		<a href="adminview.php">Back</button></a>
		
	
	</div>
    </form>
	<br/>
	
    </body>
</html>

