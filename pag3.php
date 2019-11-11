<?php session_start();
      //Put session start at the beginning of the file
?>

<!DOCTYPE html>
<html>
<head>
    <title>Session Example</title>
</head>
<body>

<?php if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $_SESSION['name'] = $_POST['name'];
        
        if($_SESSION['name']) {
            header('location: adminpage.php');
        }
    }
?>

    <form action="session.php" method="POST">
        <input type="text" name="Name">
        <input type="submit" value="submit">  
    </form>   


</body>
</html>
