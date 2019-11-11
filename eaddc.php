<html>
    <head>
        <title>
            Customer Details Form 
        </title>
        <link rel ="stylesheet" type="text/css" href="st.css">
    </head>
    <body>
        <h1 style="text-align: center;color:black;">CUSTOMER DETAILS FORM</h1>
        <div class="register" style="background-color: #2d85b0;
        width: 400px;
        margin: 0px 0px 0px 430px;
        color:white;
        font-size: 18;
        padding: 20px;
        border-radius: 10px;" >
            <form method ="post" id="register" action="">
                <h2>Customer Details </h2>
                <lable>First  Name:</lable>
                <br/>
                <input type ="text" name="fname" placeholder="Enter the fname " ><br/>
                
                <lable>Last  Name:</lable><br/>
                <input type ="text" name="lname" placeholder="Enter the lname " ><br/>

                <lable>DateofBirth:</lable><br/>
                <input type ="date" name="dob" placeholder="Enter the dob " ><br/>
		
		<lable>Address:</lable><br/>
                <input type ="address" name="address" placeholder="Enter the address " ><br/>

                <lable>Email:</lable><br/>
                <input type ="email" name="email" placeholder="Enter the email " ><br/>

                <lable>Car showroom id</lable><br/>
                <input type ="number" name="cid" placeholder="Enter the carshowroom id " ><br/>

                <lable>Purchased amount</lable><br/>
                <input type ="number" name="price" placeholder="Enter the price " ><br/>
                
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
                  
                        if(!empty($_POST['address']))
                        {
                            if(!empty($_POST['email'])) 
                            {
				 if(!empty($_POST['cid'])) 
                            	{
					 if(!empty($_POST['price'])) 
                            		{				
					$dbusername='root';
					$dbpassword='';
					$dbname='car';
					$feedback="Not yet given the feed back";
					$host='localhost';
					$cid="";
					$row="";
					$no_row="";
					$conn =  mysqli_connect("localhost" , "root" , "");
					mysqli_select_db($conn,"car");
							
						$sql="select count(*) as c from customer ";
						$result = $conn->query($sql);
    					
   						 while($row = $result->fetch_assoc())
						 {
							$no_row=$row['c'];
		
						}
						if($no_row == 0)
						{
							$cid="100";
						}
						else
						{	
							$sql="select max(c_id)  from customer ";
							$result = $conn->query($sql);
    					
   						 while($row = $result->fetch_assoc())
						 {
							$cid=$row['max(c_id)']+1;
		
						 }
						}	 
					
					$q="INSERT INTO customer 				values('$cid','$_POST[fname]','$_POST[lname]','$_POST[address]','$_POST[cid]','$_POST[email]','$feedback','$_POST[price]','$_POST[dob]')";	
							$res=$conn->query($q);
						
						echo "inserted succesfully";
						
                                    	
							$conn->close();
                            					}else{echo"price should not be empty";}
                       		 			}else{echo"car-showroom-id should not be empty";}
                    				}else{echo"email should not be empty";}
               	 		}else{echo"address should not be empty";}
       		 }else{echo"dob should not be empty";}
	}else{echo"lname should not be empty";}
}else{echo"fname should not be empty";}
}
?>
        </div>
 <br><br><br><br><br><br><a href="employeview.php"><button  name="back" style="width:10%;color=aqua;position: 'relative'; top:50%;bored-size:40px;border-radius:10pxborder: none;
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

