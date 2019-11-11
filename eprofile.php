    <!DOCTYPE html>
    <html>
    <head>
    <title>Admin Profile</title>
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
    </style>
    </head>
    <body>
    <table>
    <tr>
    <th>Admin_Id</th>
    <th>Admin_Name</th>
    <th>Password</th>
		    
	</tr>
    <?php
    $conn = mysqli_connect("localhost", "root", "", "car");
    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
    $sql = "SELECT  admini_d, username,password FROM admin";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
    echo "<tr><td>" . $row["admini_d"]. "</td><td>" . $row["username"] . "</td><td>".$row["password"] . "</td></tr>";
    }
    echo "</table>";
    } else { echo "0 results"; }
    $conn->close();
    ?>
    </table>
    </body>
    </html>
