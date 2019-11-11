<html>
    <head>
        <title>
            Car Details Form 
        </title>
        <link rel ="stylesheet" type="text/css" href="st.css">
    </head>
    <body>
        <h1 style="text-align: center;color:black;">CAR DETAILS FORM</h1>
        <div class="register" style="background-color: #2d85b0;
        width: 400px;
        margin: 0px 0px 0px 430px;
        color:white;
        font-size: 18;
        padding: 20px;
        border-radius: 10px;" >
            <form method ="post" id="register" action="">
                <h2> Car Details </h2>
                <lable>Brand  Name:</lable>
                <br/>
                <input type ="text" name="bname" placeholder="Enter the brand name " ><br/>
                
                <lable>Model  Name:</lable><br/>
                <input type ="text" name="mname" placeholder="Enter the model name " ><br/>
                <lable>Model Id :</lable><br/>
                <input type ="number" name="id" placeholder="Enter the model id " ><br/>
                <lable>Rating:</lable><br/>
                <input type ="number" name="rating" placeholder="Enter the rating " ><br/>
                <lable>Cost of the car:</lable><br/>
                <input type ="number" name="cost" placeholder="Enter the cost of the car " ><br/>
                <lable>Car showroom id</lable><br/>
                <input type ="number" name="cid" placeholder="Enter the carshowroom id " ><br/>
                <lable>Releasing Date</lable><br/>
                <input type ="date" name="date" placeholder="Enter the release date " ><br/>
                
                <input type ="submit" name="submit" value="submit">
                

            </form>
            <?php
if(isset($_POST['submit']))
{
    if(!empty($_POST['bname']))
    {
        if(!empty($_POST['mname']))
        {
            if(!empty($_POST['id']))
            {
                if(!empty($_POST['rating']))
                {
                    if(!empty($_POST['cost']))
                    {
                        if(!empty($_POST['cid']))
                        {
                            if(!empty($_POST['date'])) 
                            {
					$dbusername='root';
					$dbpassword='';
					$dbname='car';
					$host='localhost';
					$conn =  mysqli_connect("localhost" , "root" , "");
					mysqli_select_db($conn,"car");
							
							mysqli_query($conn,"INSERT INTO new_cars 				values('$_POST[bname]','$_POST[mname]','$_POST[rating]','$_POST[cost]','$_POST[date]','$_POST[id]','$_POST[cid]')");
						
						echo "inserted succesfully";
						

$conn->close();						
							
                                    	
                            }else{echo"release date should not be empty";}
                        }else{echo"car -id should not be empty";}
                    }else{echo"cost should not be empty";}
                }else{echo"rating should not be empty";}
            }else{echo"mid should not be empty";}
        }else{echo"model name should not be empty";}
    }else{echo"brand name should not be empty";}
}
?>
        </div>

<br><br><br><br><br><br><a href="adminview.php">     <button  name="back" style="width:10%;color=aqua;position: 'center'; top:50%;bored-size:40px;border-radius:10pxborder: none;
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

