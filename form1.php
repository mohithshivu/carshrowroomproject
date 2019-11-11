<?php

	$host='localhost';
	$dbusername='root';
	$dbpassword='';
	$dbname='login1';
	$name = "";
 	$email = "";
	$password= "";
	//$conn = new mysqli($host , $dbusername , $dbpassword , $dbname);
	mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
	try
	{
		$conn = new mysqli($host , $dbusername , $dbpassword , $dbname);
	}
	catch(Exception $ex)
	{
		echo 'Error';
	}

	function getpost()
	{
		$posts =array();
		$posts[0]=$_POST['name'];
		$posts[1]=$_POST['email'];
		$posts[2]=$_POST['password'];
		return $posts;
	}	

	if(isset($_POST['search']))
	{	
		$data = getpost();
		
		$search_query = "select * from login1 where name = $data[0]";
	
		$search_result = mysqli_query($conn,$search_query);
			
		if($search_result )
		{	
            		if(mysqli_num_rows($search_query))
            		{
                   		 while($row = mysqli_array($search_result))
                    		{
                       		 $name = $row['name'];
                        	$email = $row['email'];
                        	$password = $row['password'];
                   		 }
          		  }
           		 else
           		 {
               			 echo " no data for this id";
           		 }
       		 }
       		 else
       		 {
                 	echo " result error";
       		 }

	}
	
	else if(isset($_POST['add']))
	{	
		
        
        
            $sql="INSERT INTO login1 (name,email,password) 					values('$name','$email','$password')";
            if($conn->query($sql))
            {
                $succes="new record inserted succesfully";
                $error="";
            }
            else
            {
            $error= "new record is not inserted successfully\n<br/>"+($con->error);
            }
            $conn->close();
        

	}
	

?>
<!DOCTYPE html>
<html>
    <title>my form</title>
    <center><head><h1>GENERAL FORM</h1>
	<style type="text/css">form{padding-top :120px;
			text-align :center;
			font-size :30px;}
		/*input{width :250px;
			height:30px;
			font-size:30px;	}*/
		h1{color:red;}
		h3{color:blue;}
	
	</style></head></center>
    <body bgcolor ="gray">

    <form method="post" action="insert.php">
        <center>NAME :<input type ="text" name="name" placeholder="name" ><br/></center>
       <center> EMAIL :<input type ="text" name="email" placeholder="email" ><br/></center>
       <center> PASSWORD :<input type ="password" name="password" placeholder="password" ><br/><center>
        
        <div><input type="submit" name="submit" value="submit"/>
		<input type="submit" name ="add" value="add"/>
		<input type="submit" name="update" value="update"/>
		<input type="submit" name="delete" value="delete"/>
		<input type="submit" name="search" value="find"/>
		<input type="submit" name="print" value="print"/>	
	
	</div>
    </form>
	<br/>
	<a href="enter.php">
	<button>BACK</butoon>
	</a>
    </body>
</html>
