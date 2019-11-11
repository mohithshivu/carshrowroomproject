<html>
    <head>
        <title>
            Employee Details Form 
        </title>
        <link rel ="stylesheet" type="text/css" href="st.css">
    </head>
    <body>
        <h1 style="text-align: center;color:black;">EMPLOYEE DETAILS FORM</h1>
        <div class="register" style="background-color: #2d85b0;
        width: 400px;
        margin: 0px 0px 0px 430px;
        color:white;
        font-size: 18;
        padding: 20px;
        border-radius: 10px;" >
            <form method ="post" id="register" action="">
                <h2>Employee Details </h2>
                <lable>First  Name:</lable>
                <br/>
                <input type ="text" name="fname" placeholder="Enter the fname " ><br/>
                
                <lable>Last  Name:</lable><br/>
                <input type ="text" name="lname" placeholder="Enter the lname " ><br/>
                <lable>Employee id:</lable><br/>
                <input type ="text" name="eid" placeholder="Enter the employee id " ><br/>
      
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
        if(!empty($_POST['lname']))
        {
            if(!empty($_POST['eid']))
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
							
							mysqli_query($conn,"UPDATE  employee SET 									fname='$_POST[fname]',lname='$_POST[lname]',j_date='$_POST[date]',cid='$_POST[cid]',password='$_POST[npassword]' where e_id='$_POST[eid]'");
						
						echo "Updated succesfully";
					}
						else{ echo "the confirm password is not match with the new password";}
						
                                }else{echo"confirm password should not be empty";}    	
                            }else{echo" new password should not be empty";}
                        }else{echo"car -id should not be empty";}
                    }else{echo"date should not be empty";}
               
            }else{echo"eid should not be empty";}
        }else{echo"lname should not be empty";}
    }else{echo"fname should not be empty";}
}
?>
        </div>
 <br><br><br><br><br><br><br><br> <a href="employeview.php"><button  name="back" style="width:10%;color=aqua;position: 'relative'; top:50%;bored-size:40px;border-radius:10pxborder: none;
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

