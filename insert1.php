<?php

$dbHost = 'localhost';
$dbUser = 'root';
$dbPassword = '';
$dbName = "contactme";
$status ="";
try
{
    $dsn= "mysql:host=". $dbHost .";dbname=". $dbName;
    $pdo= new PDO($dsn,$dbUser,$dbPassword);
    echo"Connetion Succesfull";
}
catch (PDOException $e)
{
        echo "DB Connection Failed" .$e->getMessage();
}
$status ="";
    if($_SERVER['REQUEST_METHOD']=='POST')
{
	if(isset($_post["name"]) && isset($_post["password"]))
	{
        $name= $_POST['name'];
        $password = $_POST['password'];
        }
        if(empty($name) || empty($password))
        {
                $status ="All fields are compulsory";
        }
        
        else if(!filter_var($password))
        {   

            $sql = "INSERT INTO contactinfo (name ,password ) 
                    VALUES (:name ,:password)";
            $stmt =$pdo->prepare($sql);
            $stmt ->execute(['name'=> $name , 'email' => $password]);
            $status ="your message was sent";
            $name ="";
            $password="";
        }
}
        
?>

