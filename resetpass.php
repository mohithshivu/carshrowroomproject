<html>
    <head>
        <title>
            Reset Password Form 
        </title>
        <link rel ="stylesheet" type="text/css" href="st.css">
    </head>
    <body>
        <h1 style="text-align: center;color:black;">ENTER THE NEW PASSWORD</h1>
        <div class="register" style="background-color: #2d85b0;
        width: 400px;
        margin: 0px 0px 0px 430px;
        color:white;
        font-size: 18;
        padding: 20px;
        border-radius: 10px;" >
            <form method ="post" id="register" action="">
                <h2> Enter the password </h2>
                <lable>New Password</lable>
                <br/>
                <input type ="number" name="npassword" placeholder=" new password " ></br>
                
                <lable>Confirm Password</lable><br/>
                <input type ="number" name="cpassword" placeholder=" confirm Password " ><br/>
             
                
                <input type ="submit" name="submit" value="submit">
                

            </form>
            <?php
		session_start();
		if(isset($_POST['sendcode']))
		{
			$email=$_POST['email'];
			$randomcode=mt_rand(0,999999);
			$_SESSION['random']=$randomcode;
			$message="YOUR OTP IS ".$randomcode;
			$subject="Reset Code";
			$to=$email;
			$result=mail($to,$subject,$message);
			$_SESSION['username']=$email;
		}
		if(isset($_POST['submit']))
		{	
			$code=$_POST['submit'];
			if($code == $_SESSION['random'])
			{
				header('location:resetpass.php');
			}
			else
			{
				echo"<p style=color:red>"."wrong OTP!!!";				
			}
		}
?>
     
        
    </body>
</html>

