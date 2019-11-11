<html>
    <head>
        <title>
            Admin Details Form 
        </title>
        <link rel ="stylesheet" type="text/css" href="st.css">
    </head>
    <body>
        <h1 style="text-align: center;color:black;">ADMIN DETAILS FORM</h1>
        <div class="register" style="background-color: #2d85b0;
        width: 400px;
        margin: 0px 0px 0px 430px;
        color:white;
        font-size: 18;
        padding: 20px;
        border-radius: 10px;" >
            <form method ="post" id="register" action="">
                <h2>Admin Details </h2>
                <lable>User  Name:</lable>
                <br/>
                <input type ="text" name="fname" placeholder="Enter the user name " ><br/>
                
                <lable>Admin id:</lable><br/>
                <input type ="text" name="id" placeholder="Enter the admin id " ><br/>
                <lable>Join date:</lable><br/>
                <input type ="date" name="date" placeholder="Enter the jdate " ><br/>
                <lable>Car showroom id</lable><br/>
                <input type ="number" name="cid" placeholder="Enter the carshowroom id " ><br/>
                <lable> New Password</lable><br/>
                <input type ="number" name="npassword" placeholder="Enter the new password " ><br/>
                 <lable> Confirm Password</lable><br/>
                <input type ="number" name="cpassword" placeholder="Enter the confirm password " ><br/>
                
                <input type ="submit" name="submit" value="submit"><br>
                

            </form>
            <?php
if(isset($_POST['submit']))
{
    if(!empty($_POST['fname']))
    {
       
            if(!empty($_POST['id']))
            {
                
                    if(!empty($_POST['date']))
                    {
                        if(!empty($_POST['cid']))
                        {
                            if(!empty($_POST['npassword'])) 
                            { 		
				 if(!empty($_POST['cpassword'])) 
                            	{
					$dbusername='root';
					$dbpassword='';
					$dbname='car';
					$host='localhost';
					$conn =  mysqli_connect("localhost" , "root" , "");
					mysqli_select_db($conn,"car");
					if($_POST['npassword'] == $_POST['cpassword'])
					{
							
							mysqli_query($conn,"UPDATE  admin SET 									username='$_POST[fname]',c_id='$_POST[cid]',password='$_POST[npassword]' where admini_d='$_POST[id]'");
						
						echo "Updated succesfully";
					}
						else{ echo "the confirm password is not match with the new password";}
					
$conn->close();	
                                  	
                            }else{echo"confirm password should not be empty";}
			 }else{echo"new password should not be empty";}
                        }else{echo"car -id should not be empty";}
                    }else{echo"date should not be empty";}
            }else{echo"admin id should not be empty";}
    }else{echo"user name should not be empty";}
}

?>
        </div>
 <br><br><br><br><br><br><br><br><br><a href="adminview.php"><button  name="back" style="width:10%;color=aqua;position: 'relative'; top:50%;bored-size:40px;border-radius:10pxborder: none;
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

