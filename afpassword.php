
<html>
    <head>
        <title>
            Reset Details Form 
        </title>
<script>
	function passvalues()
	{
		var aid = document.getElementById("amdinid").value;
		localStorage.setItem("textvalue",aid);
		return false;
	}
</script>
        <link rel ="stylesheet" type="text/css" href="st.css">
    </head>
    <body>
        <h1 style="text-align: center;color:black;">ENTER THE ADMINS ID TO GENERATE OTP</h1>
        <div class="register" style="background-color: #2d85b0;
        width: 400px;
        margin: 0px 0px 0px 430px;
        color:white;
        font-size: 18;
        padding: 20px;
        border-radius: 10px;" >
	
            <form method ='post' id='register' action='' >
               <h2> Enter the Admin Id  </h2>
                <lable>Admin id:</lable>
                <br/>
		
                <input type =number id ='adminid' name='aid' placeholder="Enter the Admin Id " ><br>
                <input type ='submit' name='sendcode' value="Send code"><br> 
						
                <lable>OTP</lable><br/>
                <input type ='number' name='otp' placeholder="Enter the OTP " ><br/>
             
               </form>
	 <form method ='post' id='register' action='aresetpassword.php' >
                <input type ='submit' name='verify' value='submit' action="aresetpassword.php">
                

            </form>
            	<?php
		session_start();
		
		$email="";
		$aid="";
		
		if(isset($_POST['sendcode']))
		{
			if(!empty($_POST['aid']))
			{	
				
				$conn =  mysqli_connect("localhost" , "root" , "");
				mysqli_select_db($conn,"car");
				$sql = "SELECT  * FROM admin where admini_d='$_POST[aid]'";
    				$result = $conn->query($sql);
				
    			if (($result->num_rows)> 0)
			 {
				while($row = $result->fetch_assoc())
				{
					$email=$row['email'];
					$aid=$row['admini_d'];
				}
				
			}
			else
			{
				echo"Admin Id does not exist!!!";
			}
			}
		
		if($aid == $_POST['aid'])
		{		
	 	require 'phpmailer/PHPMailerAutoload.php';
		
		$mail = new PHPMailer;

	
	$mail->isSMTP();                                      // Set mailer to use SMTP
	$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
	$mail->SMTPAuth = true;                               // Enable SMTP authentication
	$mail->Username = 'mohithamma03@gmail.com';                 // SMTP username
	$mail->Password = 'mohithshivu03@';                           // SMTP password
	$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
	$mail->Port = 587;                                    // TCP port to connect to
	
	$mail->setFrom('mohithamma03@gmail.com', 'mohith');
	$mail->addAddress($email, 'shivu');     // Add a recipient
	//$mail->addAddress('ellen@example.com');               // Name is optional
	//$mail->addReplyTo('mohithshivu03@gmail.com', 'Information');
	$mail->addCC('cc@example.com');
		$mail->addBCC('bcc@example.com');
	
	$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
	$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
	$mail->isHTML(true);                                  // Set email format to HTML
	
	$mail->Subject = 'Email form phpmailer';
	$randomcode=mt_rand(0,999999);
	$_SESSION['random']=$randomcode;
	$_SESSION['username']=$email;
		$mail->Body    = 'YOUR OTP IS '.$randomcode."<br>";
	$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
	
	if(!$mail->send()) {
	    echo 'Message could not be sent.';
	    echo 'Mailer Error: ' . $mail->ErrorInfo;
	} else {echo 'message has benn sent.';}
	}

			if(isset($_POST['verify']))
			{
			$code=$_POST['otp'];
			
			if($code == $_SESSION['random'])
			{
				 
				header('location:aresetpassword.php');
						
					
				
			}
			else
			{
				echo"<p style=color:red>"."wrong OTP!!!";
				echo"$code";				
			}
			}
		

		
		
	
}
?>
     
        </div>

    </body>
</html>

