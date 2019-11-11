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
                <lable>DateofBirth:</lable><br/>
                <input type ="date" name="dob" placeholder="Enter the dob " ><br/>
                <lable>Join date:</lable><br/>
                <input type ="date" name="date" placeholder="Enter the jdate " ><br/>
                <lable>Car showroom id</lable><br/>
                <input type ="number" name="cid" placeholder="Enter the carshowroom id " ><br/>
                
                
                <input type ="submit" name="submit" value="submit"><br>
                

            </form>
            <?php
if(isset($_POST['submit']))
{
    if(!empty($_POST['fname']))
    {
        if(!empty($_POST['lname']))
        {
            
                if(!empty($_POST['dob']))
                {
                    if(!empty($_POST['date']))
                    {
                        if(!empty($_POST['cid']))
                        {
                            
					$dbusername='root';
					$dbpassword='';
					$dbname='car';
					$host='localhost';
					$no_row="";
					$eid="";
					$password=mt_rand(0,999999);
					$conn =  mysqli_connect("localhost" , "root" , "");
					mysqli_select_db($conn,"car");
							
						$sql="select count(*) as c from employee ";
						$result = $conn->query($sql);
    					
   						 while($row = $result->fetch_assoc())
						 {
							$no_row=$row['c'];
		
						}
						if($no_row == 0)
						{
							$eid="2000";
						}
						else
						{	
							$sql="select max(e_id)  from employee ";
							$result = $conn->query($sql);
    					
   						 while($row = $result->fetch_assoc())
						 {
							$eid=$row['max(e_id)']+1;
		
						 }
						}	
						mysqli_query($conn,"INSERT INTO employee 										values('$eid','$_POST[fname]','$_POST[lname]','$_POST[dob]','$_POST[date]','$_POST[cid]','$password')");
						
						echo "inserted succesfully!";
						
		
$conn->close();		
                            
                        }else{echo"car -id should not be empty";}
                    }else{echo"date should not be empty";}
                }else{echo"dob should not be empty";}
        }else{echo"lname should not be empty";}
    }else{echo"fname should not be empty";}
}
?>
        </div>
 <br><br><br><br><br><br><br><br><br><br><br><br><a href="managerview.php"><button  name="back" style="width:10%;color=aqua;position: 'relative'; top:50%;bored-size:40px;border-radius:10pxborder: none;
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

