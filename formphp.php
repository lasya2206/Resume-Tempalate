<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';


require 'vendor/autoload.php';
// echo "i";exit;
if(isset($_POST["submit"])) 
{
	
	$name = $_POST["name"];
	$email = $_POST["email"];
	$phone = $_POST["phone"];
	$message = $_POST["message"];
// echo $name;exit;
	    //Server settings
		$mail = new PHPMailer();
		$mail->IsSMTP();
		$mail->Mailer = "smtp";
		


		//$mail->SMTPDebug  = 1;  
		$mail->SMTPAuth   = TRUE;
		$mail->SMTPSecure = "tls";
		$mail->Port       = 587;
		$mail->Host       = "smtp.gmail.com";
		$mail->Username   = 'lasyagadiyaram@gmail.com';                     //SMTP username
	    $mail->Password   = 'wlzdszdanszdgglo';
	    $mail->IsHTML(true);
	    $mail->AddAddress('lasyagadiyaram@gmail.com', 'Lasya Moti'); 
	    $mail->SetFrom('lasyagadiyaram@gmail.com', 'Test');
	         //Add a recipient
	   
	                                //Set email format to HTML
	    $mail->Subject = 'test';
	    $mail->Body    = '<html>
	    					<body>
	    						<table>
	    							<tr>
	    								<td>Name Prefix: </td><td>'.$name.'</td>
	    							</tr>
	    							<tr>
	    								<td>Email: </td><td>'.$email.'</td>
	    							</tr>
	    							<tr>
	    								<td>Phone: </td><td>'.$phone.'</td>
	    							</tr>
	    							<tr>
	    								<td>Message: </td><td>'.$message.'</td>
	    							</tr>
	    							
	    					</body
	    				  </html>';
	    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

	    if($mail->send())
	     {
	    	echo '<script>alert("Form Submitted")</script>';

	     }
	    else
	     {
	    	$message="Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
			echo $message;
	     }

	unset($_POST);

}
	

?>

