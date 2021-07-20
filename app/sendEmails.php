<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
require '../vendor/autoload.php';
require './action.php';

$mail = new PHPMailer(true);

function sendVerificationEmail($name, $email)
{
  $select = mysqli_query($con,"SELECT 'email' FROM wapendekeza WHERE email = '$email'");
	if(mysqli_num_rows($select)) {
		echo '<script language="javascript">';
        echo 'alert("This email is already being used");location.href="./regNominees.php";';
        echo '</script>';
	}else{
		try {
			//Server settings
			$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
			$mail->isSMTP();                                            //Send using SMTP
			$mail->Host = 'smtp.gmail.com';                     //Set the SMTP server to send through
			$mail->SMTPAuth   = true;                                   //Enable SMTP authentication
			$mail->Username   = 'clausevee@gmail.com';                     //SMTP username
			$mail->Password   = 'nicholaus12345678910';                               //SMTP password
			$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;            //Enable implicit TLS encryption
			$mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
		
			//Recipients
			$mail->setFrom('clausevee@gmail.com','ictawards2021.com');
			$mail->addAddress('mayenganicholaus66@gmail.com', 'Nick nick');     //Add a recipient
			$mail->addAddress($email,$name);
			
//			$mail->SMTPDebug = 0;
//			$mail->isSMTP();
			// $mail->Host = 'smtp.gmail.com';
			// $mail->SMTPAuth = true;
			// $mail->Username = 'clausevee@gmail.com';
			// $mail->Password = 'nicholaus12345678910';
			// $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
			// $mail->Port = 587;
			
			
			$mail->isHTML(true);
			$verification_code = substr(number_format(time() * rand(), 0, '', ''), 0, 6);
			$mail->Subject = 'Email Verification';
			$mail->Body = '<p> Your verification code is <b style="font-size: 30px;">.$verification_code.</b></p>';
			$mail->send();
			// $encrypted_password = password_hash($password, PASSWORD_DEFAULT);
		} catch (Exception $e) {
			echo '<script language="javascript">';
			echo 'alert("Message could not be sent!");location.href="./regNominees.php";';
			echo '</script>';
		}
	}
}