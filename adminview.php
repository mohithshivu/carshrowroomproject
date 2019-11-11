<html>
<head>
    <title>admin page</title>
    <link rel="stylesheet" type= "text/css" href="stylea.css">  
     <link rel="stylesheet" type="text/css"href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> 
	<style>
	table{
		border-collapse: collapse;
		width: 100%;
		color : #d96459;
		font-family: monospace;
		font-size: 25px;
		text-align: left; 
	}
	th{
		background-color:#d96459;
		color: white;
	}
	th:nth-child(even) { background-color: #f2f2f2;
	}
</style>	
    </head>
    <body>
        <div class="menu-bar">
        <ul>
            <li class="active"><a href="#"><i class="fa fa-id-badge" aria-hidden="true"></i>PROFILE</a>
            <div class ="sub-menu-1">
                <ul>
                    <li name="view"><a href ="aprofile.php">VIEW</a></li>
                    <li name="edit"><a href="aprofileedit.php">EDIT</a></li>
                </ul>
            </div>
        </li>
            <li><a href="#"><i class="fa fa-line-chart" aria-hidden="true"></i>
PROFIT</a><div class ="sub-menu-1">
        
            <ul>
            <li name="aturnover.php"><a href="aturnover.php" >TURN OVER</a></li>
            <li name="salary"><a href="atsalary.php">SALARY</a></li>
            <li name="profit"><a href="aprofit.php">COMPANY PROFIT</a></li>
        </ul>
                
                </div>
        </li>
            <li><a href="#"><i class="fa fa-medium" aria-hidden="true"></i>
                MANAGER</a><div class ="sub-menu-1">
                <ul>
		<li name="amserch"><a href="amserch.php">SEARCH</a></li>
            <li name="mdatils"><a href="amanagerdetails.php">DETAILS </a></li>
            <li name="add manager"><a href=amadd.php>ADD MANAGER</a></li>
            <li name="delete manager"><a href="amanagerdelete.php">DELETE MANAGER</a></li>
            </ul>
            </div>
            </li>
            <li><a href="#"><i class="fa fa-user-circle-o" aria-hidden="true"></i>
                    EMPLOYEE</a><div class ="sub-menu-1">
                <ul>
			<li name="aeserch"><a href="aeserch.php">SEARCH </a></li>
                        <li name="edeails"><a href="employedetails.php">DETAILS</a></li>
                        <li name="add employee"><a href="aadde.php">ADD EMPLOYEE</a></li>
                        <li name="del employee" ><a href="empdelete.php">DEL EMPLOYEE </a></li>
                </ul>
            </div>
            </li>
            <li><a href="#"><i class="fa fa-car" aria-hidden="true"></i>NEW CARS</a><div class ="sub-menu-1">
                <ul>
			<li name="acserch"><a href="acsearch.php">SEARCH</a></li>
                    <li name="cdetails"><a href="anewcardetails.php">DETAILS</a></li>
                    <li name="add car"><a  href="aaddc.php">ADD CAR</a></li>
                    <li name="delete car"><a href="acardelete.php">DELETE CAR</a></li>
            </ul>
            </div>
            </li>
            <li><a href="afeedback.php"><i class="fa fa-commenting" aria-hidden="true"></i>FEEDBACK</a><div class ="sub-menu-1">
                
            </div></li>
            <li><a href="#"><i class="fa fa-sign-out" aria-hidden="true"></i>LOGOUT</a><div class ="sub-menu-1">
            <ul>
                    <li name="sure"><a href ="carshroom.html">YES</a></li>
                    <li name="not"><a href ="adminview.php">NO</a></li>
            </ul>
            </div>
            </li>
            </ul>
            </div>
    </body>
</html>

