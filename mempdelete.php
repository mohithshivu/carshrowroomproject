
<!DOCTYPE html>
<html>
    <title>delete emp</title>
    <center><head><h1>ENTER THE EMPLOYEE ID TO DELETE FROM THE LIST</h1>
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
        
       <center> EMP-ID :<input type ="number" name="eid" placeholder="Employee id" ></center>
       
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
		<a href="managerview.php"><button name="back" style="width:10%;color=aqua;position: 'relative'; top:50%;bored-size:40px;border-radius:10pxborder: none;
    outline: none;
    height: 40px;
    background: aqua;
    color: back;
	justify-content: center;
	left:50%;
    font-size: 18px;
    border-radius: 20px;">Back</button></a>
		
	
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
		
		
	if(isset($_POST['delete']))
	{
			
			$res=mysqli_query($conn,"select eid from employee where e_id = '$_POST[eid]'") ;
			
			if($res == true)
			{
				mysqli_query($conn,"delete from employee where e_id = '$_POST[eid]'");
				echo "<p style= 'color: green; text-align:center'>"."employee details with $_POST[eid] deleted successfully"."</p>";
			
			}
				else
				{
					echo"<p style ='color: red ; text-align:center'>". " emlpoyee id is not exist"."</p>";
				}

$conn->close();
	}	
	
?>
