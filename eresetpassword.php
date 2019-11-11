
<html>
    <head>
        <title>
            Reset Password Form 
        </title>
        <link rel ="stylesheet" type="text/css" href="st.css">
    </head>
    <body>
        <h1 style="text-align: center;color:black;">ENTER THE NEW PASSWORD</h1>
        <div class="register" style="background-color: #2d85b0;
        width: 400px;
        margin: 0px 0px 0px 430px;
        color:white;
        font-size: 18;
        padding: 20px;
        border-radius: 10px;" >
            <form method ="post" id="register" action="">
             
                <lable>New Password</lable>
                <br/>
		
                <input type ="password" name="npassword" placeholder=" new password " ></br>
                
                <lable>Confirm Password</lable><br/>
                <input type ="password" name="cpassword" placeholder=" confirm Password " ><br/>
             
                
                <input type ="submit" name="submit" value="submit">
               
            </form>
            <?php
		
		session_start();
		
		$eid=$_SESSION['eid'];
		
		if(isset($_POST['submit']))
		{
			
			if(!empty($_POST['npassword']))
			{
				if(!empty($_POST['cpassword']))
				{	
					if($_POST['npassword'] == $_POST['cpassword'])
					{
						
						$conn =  mysqli_connect("localhost" , "root" , "");
						mysqli_select_db($conn,"car");
						$sql = "UPDATE employee SET password = $_POST[npassword] WHERE e_id = '$eid'";
    						if($result = $conn->query($sql))
						{
							header('location:emppage.php');
							
						}
						else{echo"password is not updated successfully";}
						
					}else{echo"Passwords Do not matching";}
				}else{echo"confirm password should not be empty";}
			}else{echo"new password should not be empty";}
		
		}
?>	
    
    </body>
</html>

