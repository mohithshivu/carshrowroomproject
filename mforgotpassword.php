<?php
session_start();
?>
<html>
    <head>
        <title>
            Reset Password Details Form 
        </title>
	<script>
		
	</script>
        <link rel ="stylesheet" type="text/css" href="st.css">
    </head>
    <body>
        <h1 style="text-align: center;color:black;">ENTER THE MANGER ID TO GENERATE OTP</h1>
        <div class="register" style="background-color: #2d85b0;
        width: 400px;
        margin: 0px 0px 0px 430px;
        color:white;
        font-size: 18;
        padding: 20px;
        border-radius: 10px;" >
            <form method ="post" id="register" action="" onclick="aforgotpassword.php">
                
                <lable>Manger id:</lable>
                <br/>
                <input type ="number" id ="adminid" name="mid" placeholder="Enter the Manager Id " ><br>
                <input type ="submit" name="sendcode" value="Send code"><br>	 						
                <lable>OTP</lable><br/>
                <input type ="number" name="otp" placeholder="Enter the OTP " ><br/>
             
                
                <input type ="submit" name="verify" value="submit" ">
                

            </form>
            <?php
		
		$conn =  mysqli_connect("localhost" , "root" , "");
		$email="";
		$mid="";
		mysqli_select_db($conn,"car");
		
		
		
		if(isset($_POST['sendcode']))
		{
			/*$email=$_POST['email'];
			$randomcode=mt_rand(0,999999);
			$_SESSION['random']=$randomcode;
			$message="YOUR OTP IS ".$randomcode;
			$subject="Reset Code";
			$to=$email;
			$result= mail($to,$subject,$message);
			echo"The code has been send to ".$to;
			$_SESSION['username']=$email;*/
			
			if(!empty($_POST['mid']))
			{	
		
				$sql = "SELECT  * FROM manager_pro where m_id='$_POST[mid]'";
    				$result = $conn->query($sql);
				
    			if ($result->num_rows > 0)
			 {
				while($row = $result->fetch_assoc())
				{
					$email=$row['email'];
					$mid=$row['m_id'];
				}
				
			}
			else
			{
				echo"Magaer Id does not exist!!!";
			}
			}
		else
			{
				echo"Manager id should not be empty";
			}
	if($mid == $_POST['mid'] && !empty ($_POST['mid']))
	{
	 require 'phpmailer/PHPMailerAutoload.php';

	$mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

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
	//$mail->addCC('cc@example.com');
		//$mail->addBCC('bcc@example.com');
	
	//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
	//$mail->addAttachment('/tmp/image.jpg', '.pic62.jpg');   // Optional name
	$mail->isHTML(true);                                  // Set email format to HTML
	
	$mail->Subject = 'Verificatition Email for Car Showroom Manager ';
	$randomcode="";
	$randomcode=mt_rand(0,999999);
	$_SESSION['random']=$randomcode;
	
		$mail->Body    = 'Dear Sir/Madam '.'<br>'
				.'YOUR OTP IS '.$randomcode."<br>";
	$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
	
	$_SESSION['mid']=$mid;		
	
	if(!$mail->send()) {
	    echo 'Message could not be sent.';
	    echo 'Mailer Error: ' . $mail->ErrorInfo;
	} else {  
			 echo 'Message has been be sent.';}
}
}
			if(isset($_POST['verify']))
			{
			$code=$_POST['otp'];
			
			if($code == $_SESSION['random'])
			{
				
				header('location:mresetpassword.php');
			}
			else
			{
				echo"<p style=color:red>"."wrong OTP!!!";				
			}
			}
		
		
			
		
		
		


	
?>
     
        </div>

    </body>
</html>

