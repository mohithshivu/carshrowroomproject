<!DOCTYPE html>
<html>
    <title>delete car</title>
    <center><head><h1>ENTER THE CAR ID TO DELETE FROM THE LIST</h1>
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
        
       <center> MODEL_ID :<input type ="number" name="cid" placeholder="Car id" ></center>
       
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
		$idFromDB="";
		
	if(isset($_POST['delete']))
	{
			
			$res=mysqli_query($conn,"select model_id from new_cars where model_id = '$_POST[cid]'") ;
			while( $row = mysqli_fetch_assoc( $res))
			{
				$idFromDB=$row['model_id'];
				
			}
			if($idFromDB == $_POST['cid'])
			{
				mysqli_query($conn,"delete from new_cars where model_id = '$_POST[cid]'");
				echo "<p style= 'color: green; text-align:center'>"."Car details with $_POST[cid] deleted successfully"."</p>";
			
$conn->close();
			}
				else
				{
					echo"<p style ='color: red ; text-align:center'>". " Car id is not exist"."</p>";
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
    border-radius: 20px;"><a href="adminview.php">Back</a></button>
		
	
	</div>
    </form>
	<br/>
	
    </body>
</html>

