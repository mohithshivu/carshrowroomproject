<html>
    <head>
        <title>
             Feedback Form 
        </title>
        <link rel ="stylesheet" type="text/css" href="st.css">
    </head>
    <body>
        <h1 style="text-align: center;color:black;">FEEDBACK FORM</h1>
        <div class="register" style="background-color: #2d85b0;
        width: 400px;
        margin: 0px 0px 0px 430px;
        color:white;
        font-size: 18;
        padding: 20px;
        border-radius: 10px;" >
            <form method ="post" id="register" action="">
                <h2>CUSTOMER FEEDBACK </h2>
                <lable>Customer Id:</lable>
                <br/>
                <input type ="text" name="cid" placeholder="Enter the customer id " ><br/>
                 <lable>Feedback:</lable>
                <br/>
		<textarea name="feedback1" style='width:300px;height:100px;'  /></textarea><br/>
                <input type ="hidden" name="feedback"  ><br/>
                            <?php
if(isset($_POST['submit']))
{
    if(!empty($_POST['cid']))
    {
        if(!empty($_POST['feedback1']))
        {
            
				
					$dbusername='root';
					$dbpassword='';
					$dbname='car';
					$host='localhost';
					$conn =  mysqli_connect("localhost" , "root" , "");
					mysqli_select_db($conn,"car");
					$p="";		
							$res=mysqli_query($conn,"select c_id from customer where c_id = '$_POST[cid]'") ;
			while( $row = mysqli_fetch_assoc( $res))
			{
				$p=$row['c_id'];
				
			}
			if($p == $_POST['cid'])
			{	
							
							mysqli_query($conn,"UPDATE  customer SET 									feedback='$_POST[feedback1]' where c_id='$_POST[cid]'");
						
						echo "thank you for your wonderfull feedback!!!";
					
			}

$conn->close();
			else{echo"<p style=color:red>"." customer id not exist !!!";}		
						
             
        }else{echo"feedback should not be empty";}
    }else{echo"cid should not be empty";}
}
?>
                
               <br><br><br> <input type ="submit" name="submit" value="submit"><br>
                

            </form>

        </div>
  <br><br><br><br><br><br><br><br><a href="custmerview.php"><button  name="back" style="width:10%;color=aqua;position: 'relative'; top:50%;bored-size:40px;border-radius:10pxborder: none;
    outline: none;
    height: 40px;
    background: aqua;
    color: back;
	justify-content: center;
	left:50%;
    font-size: 18px;
    border-radius: 20px;">Back</a></button>
    </body>
</html>

