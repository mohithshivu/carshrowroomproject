<html>
    <head>
        <title>
            Custer Profile Form 
        </title>
        <link rel ="stylesheet" type="text/css" href="st.css">
    </head>
    <body>
        <h1 style="text-align: center;color:black;">CUSTOMER PROFILE FORM</h1>
        <div class="register" style="background-color: #2d85b0;
        width: 400px;
        margin: 0px 0px 0px 430px;
        color:white;
        font-size: 18;
        padding: 20px;
        border-radius: 10px;" >
            <form method ="post" id="register" action="">
                <h2>Custmer Details </h2>
                <lable>First  Name:</lable>
                <br/>
                <input type ="text" name="fname" placeholder="Enter the fname " ><br/>
                
                <lable>Last  Name:</lable><br/>
                <input type ="text" name="lname" placeholder="Enter the lname " ><br/>
		<lable>Customer id:</lable><br/>
                <input type ="text" name="cid" placeholder="Enter the customer id " ><br/>
                <lable>Gender:</lable><br/>
                <input type ="text" name="gender" placeholder="Enter the Gender " ><br/>
                <lable>DateofBirth:</lable><br/>
                <input type ="date" name="dob" placeholder="Enter the dob " ><br/>
		<lable>Address:</lable><br/>
                <input type ="address" name="address" placeholder="Enter the address " ><br/>
                <lable>Email:</lable><br/>
                <input type ="email" name="email" placeholder="Enter the email " ><br/>
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
        if(!empty($_POST['lname']))
        {
            if(!empty($_POST['cid']))
            {
                    if(!empty($_POST['dob']))
                    {
                        if(!empty($_POST['address']))
                        {
				if(!empty($_POST['email']))
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
							
							mysqli_query($conn,"UPDATE  customer_pro SET 									fname='$_POST[fname]',lname='$_POST[lname]','dob='$_POST[dob]',email='$_POST[email]',addr='$_POST[address]','gender='$_POST[gender]',password='$_POST[npassword]' where cid='$_POST[cid]'");
						
						echo "Updated succesfully";
					}
						else{ echo "the confirm password is not match with the new password";}
						
                                }else{echo"confirm password should not be empty";}    	
                            }else{echo" new password should not be empty";}
			 }else{echo"email should not be empty";}
                        }else{echo"address  should not be empty";}
                    }else{echo"bod should not be empty";}
               
            }else{echo"cid should not be empty";}
        }else{echo"lname should not be empty";}
    }else{echo"fname should not be empty";}
}
?>
        </div>
  <a href="custmerview.php"><button  name="back" style="width:10%;color=aqua;position: 'relative'; top:50%;bored-size:40px;border-radius:10pxborder: none;
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

