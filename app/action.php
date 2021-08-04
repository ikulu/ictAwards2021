<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require '../vendor/autoload.php';

require 'default.php';
session_start();

$mail = new PHPMailer(TRUE);

//send verification codes
if(isset($_POST['verification'])){
	$name = trim($_POST['name']);
	$email = trim($_POST['email']);

	try {
   
		$mail->setFrom('ictawards@taic2021.co.tz', 'Darth Vader');
		$mail->addAddress('mayenganicholaus66@gmail.com', 'Emperor');
		$mail->Subject = 'Force';
		$mail->Body = 'There is a great disturbance in the Force.';
		
		/* SMTP parameters. */
		
		/* Tells PHPMailer to use SMTP. */
		$mail->isSMTP();
		
		/* SMTP server address. */
		$mail->Host = 'mail.taic2021.co.tz';
	 
		/* Use SMTP authentication. */
		$mail->SMTPAuth = TRUE;
		
		/* Set the encryption system. */
		$mail->SMTPSecure = 'tls';
		
		/* SMTP authentication username. */
		$mail->Username = 'ictawards@taic2021.co.tz';
		
		/* SMTP authentication password. */
		$mail->Password = 'nicholaus12345678910';
		
		/* Set the SMTP port. */
		$mail->Port = 465;
		
		/* Finally send the mail. */
		$mail->send();
	 }
	 catch (Exception $e)
	 {
		echo $e->errorMessage();
	 }
	 catch (\Exception $e)
	 {
		echo $e->getMessage();
	 }
	// echo '<script language="javascript">';
    // echo 'alert("Verified");location.href="./regNominees.php";';
    // echo '</script>';
}

// register watu wanaopendekeza
if(isset($_POST['register'])){
	$name = trim($_POST['name']);
	$email = trim($_POST['email']);
	$code = trim($_POST['codes']);
	$bic = trim($_POST['bic']);
	$btoc = trim($_POST['btoc']);
	$mic = trim($_POST['mic']);
	$bicc = trim($_POST['bicc']);
	$bicAG = trim($_POST['bicAG']);
	$bicPS = trim($_POST['bicPS']);
	$bcpsHIM = trim($_POST['bcpsHIM']);
	$bicITSD = trim($_POST['bicITSD']);
	$byiE = trim($_POST['byiE']);
	$bir = trim($_POST['bir']);
	$user = '';
	$token = 'gyuegruih893758947nojkgf';
	
	//validation for the inputs 
	if($bic == "" || $btoc == "" || $mic == "" || $bicc == "" || $bicAG == "" || $bicPS == "" || $bcpsHIM == "" || $bicITSD == "" || $byiE == "" || $bir == ""){
		echo '<script language="javascript">';
        echo 'alert("Please norminate in all categories");location.href="./regNominees.php";';
        echo '</script>';
		exit;
	}
	if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		echo '<script language="javascript">';
        echo 'alert("Invalid email address");location.href="./regNominees.php";';
        echo '</script>';
	}
	if($name == "" || $email == "" || $code == ""){
		echo '<script language="javascript">';
        echo 'alert("Please fill out the form");location.href="./regNominees.php";';
        echo '</script>';
	}
	$select = mysqli_query($con,"SELECT 'email' FROM wapendekeza WHERE email = '$email'");
	if(mysqli_num_rows($select)) {
		echo '<script language="javascript">';
        echo 'alert("This email is already being used");location.href="./regNominees.php";';
        echo '</script>';
	}else{
		$sql = "INSERT INTO wapendekeza (name,email,code) VALUES ('$name','$email','$code')";
		if ($con->query($sql) === TRUE) {
			
		} else {
			echo '<script language="javascript">';
			echo 'alert("Sever is temporal Offline, Please comeback later!");location.href="./regNominees.php";';
			echo '</script>';
		}
		$queryOne = "SELECT * FROM wapendekeza WHERE name = '$name' AND email = '$email' AND code = '$code'";
		$query_runOne = mysqli_query($con,$queryOne);
		while($rows = mysqli_fetch_array($query_runOne)){
			$user = "{$rows['id']}";
		}
	
		$sql2 = "INSERT INTO wapendekezanawapendekezwa (categoriesFK,pendekezaID,pendekezwaID,status) VALUES (3,'$user','$bic','not confirmed')";
		$sql3 = "INSERT INTO wapendekezanawapendekezwa (categoriesFK,pendekezaID,pendekezwaID,status) VALUES (4,'$user','$btoc','not confirmed')";
		$sql4 = "INSERT INTO wapendekezanawapendekezwa (categoriesFK,pendekezaID,pendekezwaID,status) VALUES (7,'$user','$mic','not confirmed')";
		$sql5 = "INSERT INTO wapendekezanawapendekezwa (categoriesFK,pendekezaID,pendekezwaID,status) VALUES (8,'$user','$bicc','not confirmed')";
		$sql6 = "INSERT INTO wapendekezanawapendekezwa (categoriesFK,pendekezaID,pendekezwaID,status) VALUES (11,'$user','$bicAG','not confirmed')";
		$sql7 = "INSERT INTO wapendekezanawapendekezwa (categoriesFK,pendekezaID,pendekezwaID,status) VALUES (12,'$user','$bicPS','not confirmed')";
		$sql8 = "INSERT INTO wapendekezanawapendekezwa (categoriesFK,pendekezaID,pendekezwaID,status) VALUES (13,'$user','$bcpsHIM','not confirmed')";
		$sql9 = "INSERT INTO wapendekezanawapendekezwa (categoriesFK,pendekezaID,pendekezwaID,status) VALUES (14,'$user','$bicITSD','not confirmed')";
		$sql10 = "INSERT INTO wapendekezanawapendekezwa (categoriesFK,pendekezaID,pendekezwaID,status) VALUES (15,'$user','$byiE','not confirmed')";
		$sql11 = "INSERT INTO wapendekezanawapendekezwa (categoriesFK,pendekezaID,pendekezwaID,status) VALUES (16,'$user','$bir','not confirmed')";
		
		if ($con->query($sql2) === TRUE) {
		}
		if ($con->query($sql3) === TRUE) {
		}
		if ($con->query($sql4) === TRUE) {
		}
		if ($con->query($sql5) === TRUE) {
		}
		if ($con->query($sql6) === TRUE) {
		}
		if ($con->query($sql7) === TRUE) {
		}
		if ($con->query($sql8) === TRUE) {
		}
		if ($con->query($sql9) === TRUE) {
		}
		if ($con->query($sql10) === TRUE) {
		}
		if ($con->query($sql11) === TRUE) {
			echo '<script language="javascript">';
			echo 'alert("congrats!!! You have saccesful nominate");location.href="./regNominees.php";';
			echo '</script>';
		} else {
			echo "<script type='text/javascript'>alert('Sever temporal Ofline, Please come back later!')</script>";
		}
	}
}

// register kampuni zanazopendekezwa
if(isset($_POST['RegisterCompany'])){
	$cname = trim($_POST['cname']);
	$cemail = trim($_POST['cemail']);
	$cphone = trim($_POST['cphone']);
	$ctype = trim($_POST['type']);

	//validation for the inputs 
	if($cname == ""){
		echo '<script language="javascript">';
        echo 'alert("Company name is required");location.href="../adminstrator/adminPages/companies.php";';
        echo '</script>';	
	}

	if($cemail == ""){
		echo '<script language="javascript">';
        echo 'alert("Email Field is required");location.href="../adminstrator/adminPages/companies.php";';
        echo '</script>';	
	}

	if($cphone == ""){
		echo '<script language="javascript">';
        echo 'alert("Company Phone number is required");location.href="../adminstrator/adminPages/companies.php";';
        echo '</script>';	
	}
	if($ctype == ""){
		echo '<script language="javascript">';
        echo 'alert("Company Type is required");location.href="../adminstrator/adminPages/companies.php";';
        echo '</script>';	
	}

	$sql = "INSERT INTO wapendekezwa (companyName,companyAddress,contact,status,type) VALUES ('$cname', '$cemail', '$cphone', 'Active' ,'$ctype')";
	if ($con->query($sql) === TRUE) {
		echo '<script language="javascript">';
        echo 'alert("Saccesful registered new company");location.href="../adminstrator/adminPages/companies.php";';
        echo '</script>';	
	} else {
		echo '<script language="javascript">';
        echo 'alert("Sever temporal Offline, Please comeback later!");location.href="../adminstrator/adminPages/companies.php";';
        echo '</script>';	
	}
}

// log in
if(isset($_POST['login'])){
	$user = $_POST['email'];
	$pwd = $_POST['password'];
	
	$queryOne = "SELECT * FROM admins WHERE email = '$user' AND password = '$pwd'";
    $query_runOne = mysqli_query($con,$queryOne);

    $upOne = mysqli_num_rows($query_runOne); 
    if($upOne > 0){
		while($rows = mysqli_fetch_array($query_runOne)){
			$_SESSION['USER_NAME'] = "{$rows['name']}";
			$_SESSION['USERID'] = "{$rows['id']}";				
		}
	  header('location:../adminstrator/adminPages/admnHome.php'); 
    }else{
		echo '<script language="javascript">';
        echo 'alert("Username or password is incorrect");location.href="../adminstrator/index.php";';
        echo '</script>';
    } 

}
//log in ends

// log out
if(isset($_GET['out_admin'])){
	session_destroy();
	require('index.php');

}
//LOG OUT ENDS

//send email and confirm approved
if(isset($_GET['moreConfirm'])){
    $id = $_REQUEST['more'];
	$qry = "UPDATE wapendekezanawapendekezwa SET status = 'confirmed' WHERE id = '$id'";
    $query_runOne = mysqli_query($con,$qry);
	echo '<script language="javascript">';
    echo 'alert("Confirmed And Email sent");location.href="../adminstrator/adminPages/norminatedPerCategory.php";';
    echo '</script>';
	
}
?>