    <!DOCTYPE html>
    <html>
    <head>
    <title>Mangers Details</title>
    <style>
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
	h1{
		color: green;
		background-position: center;
		position: center;
		text-align: center;
	}
	
    </style>
    </head>
    <body>
	<h1 style="color:'rgb(0,100,0)';position:'center';">MANAGERS DETAILS</h1>
    <table>
    <tr>
    <th>Manager_Id</th>
    <th>First Name</th>
	<th>Last Name</th>
    <th>Bod</th>
	<th>Join Date</th>	
	  
	
	</tr>
    <?php
    $conn = mysqli_connect("localhost", "root", "", "car");
    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
    $sql = "SELECT * FROM manager";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
    echo "<tr><td>" . $row["manager_id"]. "</td><td>" . $row["fname"] . "</td><td>". $row["lname"] . "</td><td>". $row["dob"] . "</td><td>". $row["join_date"] . "</td></tr>";
    }
    echo "</table>";
    } else { echo "0 results"; }
    $conn->close();
    ?>
	
    </table>
	<a href="managerview.php"><button name="back" style="width:10%;color=aqua;position:center;boredr-size:40px;border-radius:10pxborder: none;
    outline: none;
    height: 40px;
    background: aqua;
    color: back;;
    font-size: 18px;
    border-radius: 20px;">Back</button></a>
    </body>
    </html>
