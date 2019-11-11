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
		
		$search_query = "select * from login1 where id = $data[0]";
	
		$search_result = mysqli_query($conn,$search_query);
			
		if($search_result )
		{	
            if(mysqli_num_rows($search_query)
            {
                    while($row = mysqli_fetchs_array($search_result))
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
	
?>


