<?php

	$host='localhost';
	$dbusername='root';
	$dbpassword='';
	$dbname='login1';
	$name = "";
 	$email = "";
	$password= "";
	$conn = new mysqli($host , $dbusername , $dbpassword , $dbname);
	mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
	
		//$conn = new mysqli($host , $dbusername , $dbpassword , $dbname);
	
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
			$host='localhost';
		
		$dbusername='root';
		$dbpassword='';
		$dbname='login1';
		$name = "";
	 	$email = "";
		$password= "";
		$search_query = "select * from login1 where name = $data[0]";
		$conn = new mysqli($host , $dbusername , $dbpassword , $dbname);
		$search_result = mysqli_query($conn,$search_query);
			
		if($search_result )
		{	
            		if(mysqli_num_rows($search_query))
            		{
                   		 while($row = mysqli_fetch_array($search_result))
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
		$dbusername='root';
		$dbpassword='';
		$dbname='login1';
		$name = "";
	 	$email = "";
		$password= "";
        
        	$conn = new mysqli($host , $dbusername , $dbpassword , $dbname);
            $sql="INSERT INTO login1 (name,email,password)values('$name','$email','$password')";
		$result=mysqli_query($conn,$sql);
            if($result)
            {
                echo"new record inserted succesfully";
               
            }
            else
            {
            echo"new record is not inserted successfully\n<br/>"+($con->error);
            }
            $conn->close();
        

	}
	
	else if(isset($_POST['update']))
	{	
		$data = getpost();
		$dbusername='root';
		$dbpassword='';
		$dbname='login1';
		$name = "";
	 	$email = "";
		$password= "";
		$conn = new mysqli($host , $dbusername , $dbpassword , $dbname);
		//$search_query = "select * from login1 where id = $data[0]";
        $delete_row   = "update login1 set name ='$_POST['update'] where name= $data[0] ";
         mysqli_query($conn,$delete_row);
        echo"new record updated succesfully";
			
      
        /*if($result)
        {
            echo"new record updated succesfully";
            //$error="";
        }
        else
        {
        echo"new record is not updatedted successfully\n<br/>"+($conn->error);
        }*/
        $conn->close();

    }
	
	/*else if(isset($_POST['delete']))
	{	
		$data = getpost();
		
		//$search_q = "delete  from login1 where name = $data[0]";
	
		//$search_result = mysqli_query($conn,$search_q);
			
		if($search_result )
		{	
           		 echo $serach_result;
            	}
            	else
            	{
                	echo " no data for this name are email id";
            	}
        
    
        

	}*/
	
	/*if(isset($_POST['print']))
	{	
		//$data = getpost();
		
		$search_query = "select * from login1 where id = $data[0]";
	
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

	*/
	
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

    <form method="post" action="">
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
