
<!DOCTYPE html>
<html>
    <title> Employee Profile</title>
    
	<style type="text/css">form{padding-top :120px;
			text-align :center;
			font-size :30px;}
		
		h1{color:red;}
		h3{color:blue;}
		body{
		background-image:url('pic24.jpeg');
		background-color: white;
	}
	 table {
    border-collapse: collapse;
    width: 100%;
    color: #588c7e;
    font-family: monospace;
    font-size: 25px;
    text-align: left;
    }
    th {
    background-color: #588c7e;
    color: white;
    }
    tr:nth-child(even) {background-color: #f2f2f2}
	</style></head></center>
    <body>
	<h1 style="text-align:center">THE TOTAL TURN OVER IS </h1>
    <form method="post" action="">
         <table>
    <tr>
    <th style='text-align:center'>TURN_OVER</th>
    
		    
	</tr>
		<?php
		
    			
   			 		$conn = mysqli_connect("localhost", "root", "", "car");
  					$to="";
					$ts="";
					$p="";
				
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
    $q="select * from profit";
						/*select sum(c.cost),sum(m.sal)+sum(e.salary),sum(m.sal)+sum(e.salary)) from manager_pro m,emp_pro e,customer c";*/
	$result1 = $conn->query($q);
	 while($row = $result1->fetch_assoc()) {
		$ts=$row['total_salary'];
		$tp=$row['turn_over'];
		$p=$row['com_profit'];
	}
	$q1="select sum(c.cost) as tp,sum(m.sal)+sum(e.salary) as ts,(sum(c.cost)-(sum(m.sal)+sum(e.salary))) as p  from manager_pro m,emp_pro e,customer c";
	$result2 = $conn->query($q1);
	while($row2 = $result2->fetch_assoc()) {
		$ts1=$row2['ts'];
		$tp1=$row2['tp'];
		$p1=$row2['p'];
	}
	$query="UPDATE profit SET turn_over ='$tp1',total_salary='$ts1',com_profit='$p1' where total_salary= '$ts' ";
    	 $conn->query($query);
    // output data of each row

     echo "<tr><td style='text-align:center'>".$tp1. "</td></tr>"."<br><br><br>";
	
    
    $conn->close();
    ?>	
      
      
        </table>
        <div>
		
		
		
		

	<br><br><br><button name="back" style="width:10%;color=aqua;position: 'relative'; top:50%;bored-size:40px;border-radius:10pxborder: none;
    outline: none;
    height: 40px;
    background: aqua;
    color: back;
	justify-content: center;
	left:50%;
    font-size: 18px;
    border-radius: 20px;"><i class="fa fa-arrow-circle-left" aria-hidden="true"></i><a href="managerview.php">Back</a></button>

	
	</div>
    </form>
	<br/>
	
    </body>
