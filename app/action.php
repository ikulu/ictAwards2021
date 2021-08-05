<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require '../vendor/autoload.php';

require 'default.php';
session_start();

$mail = new PHPMailer(true);

//retrieve nomination
if(isset($_POST['getNomination'])){
	$email = trim($_POST['email2']);
    $codes = rand(100000,999999);
    //check if email exists
    $select = mysqli_query($con,"SELECT 'email' FROM wapendekeza WHERE email = '$email'");
	if(mysqli_num_rows($select)) {
        try {
            //Server settings
            // $mail->SMTPDebug = SMTP::DEBUG_SERVER;         
            $mail->isSMTP();                               
            $mail->Host       = 'smtp.gmail.com';     
            $mail->SMTPAuth   = true;                      
            $mail->Username   = 'clausevee@gmail.com';
            $mail->Password   = 'nicholaus12345678910';
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; //'tls'
            $mail->Port       = 465;                     

            //Recipients
            $mail->setFrom('clausevee@gmail.com', 'ICT Awards2021');
            $mail->addAddress($email, $name);
        
            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = 'ICT Awards2021 Email Verification Code';
            $mail->Body    = 'Hi..! <b>'.$name.'</b><br>
            Here is your email verification code <br><br><br><br>
            '.$codes;
            
            /* Finally send the mail. */
            $mail->send();
            $sql = "INSERT INTO tmp2 (codes,email) VALUES ('$codes','$email')";
            $con->query($sql);
            $_SESSION['email'] = $email;
            echo '<script language="javascript">';
            echo 'alert("Email with verification codes has been sent");location.href="./getYourNomination.php";';
            echo '</script>';
	    }catch (Exception $e){
		    echo $e->errorMessage();
	    }catch (\Exception $e){
		    echo $e->getMessage();
	    }
	}else{
		echo '<script language="javascript">';
        echo 'alert("This email is not in our records. Nominate now...");location.href="./regNominees.php";';
        echo '</script>';
        exit;
    }
}

//verify codes for user to acces their nomination
if(isset($_POST['getNominationVerify'])){
    $code = trim($_POST['codes']);

    // validate codes first
    $queryOne = "SELECT * FROM tmp2 WHERE codes = '$code' ";
    $query_runOne = mysqli_query($con,$queryOne);
    while($rows = mysqli_fetch_array($query_runOne)){
        $codes = "{$rows['codes']}";
    }
    if($codes != $code){
        echo '<script language="javascript">';
        echo 'alert("Please give valid codes");location.href="./getYourNomination.php";';
        echo '</script>';
        exit;
    }else{
        header("Status: 301 Moved Permanently");
        header("Location:./userNomination.php?codes=". $code);
    }
}



//send verification codes
if(isset($_POST['verification'])){
	$name = trim($_POST['name']);
	$email = trim($_POST['email']);
    $codes = rand(100000,999999);

    //check if email exists
    $select = mysqli_query($con,"SELECT 'email' FROM wapendekeza WHERE email = '$email'");
	if(mysqli_num_rows($select)) {
		echo '<script language="javascript">';
        echo 'alert("This email is already being used");location.href="./regNominees.php";';
        echo '</script>';
        exit;
	}else{
try {
        //Server settings
        // $mail->SMTPDebug = SMTP::DEBUG_SERVER;         
        $mail->isSMTP();                               
        $mail->Host       = 'smtp.gmail.com';     
        $mail->SMTPAuth   = true;                      
        $mail->Username   = 'clausevee@gmail.com';
        $mail->Password   = 'nicholaus12345678910';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; //'tls'
        $mail->Port       = 465;                     

        //Recipients
        $mail->setFrom('clausevee@gmail.com', 'ICT Awards2021');
        $mail->addAddress($email, $name);
	
        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'ICT Awards2021 Email Verification Code';
        $mail->Body    = 'Hi..! <b>'.$name.'</b><br>
        Here is your email verification code <br><br><br><br>
        '.$codes;
		
		/* Finally send the mail. */
		$mail->send();
        $sql = "INSERT INTO tmp (codes) VALUES ('$codes')";
        $con->query($sql);
        echo '<script language="javascript">';
        echo 'alert("Email has been sent");location.href="./regNominees.php";';
        echo '</script>';
	 }
	 catch (Exception $e)
	 {
		echo $e->errorMessage();
	 }
	 catch (\Exception $e)
	 {
		echo $e->getMessage();
	 }
    }
}

// register watu wanaopendekeza
if(isset($_POST['register'])){
    
	$name = trim($_POST['name']);
	$email = trim($_POST['email']);
	$code = trim($_POST['codes']);
	$bisISP = trim($_POST['bisISP']);
	$bisIS = trim($_POST['bisIS']);
	$bisAS = trim($_POST['bisAS']);
	$bisHS = trim($_POST['bisHS']);
	$bisSD = trim($_POST['bisSD']);
	$fsa = trim($_POST['fsa']);
	$isa = trim($_POST['isa']);
	$asa = trim($_POST['asa']);
	$hsa = trim($_POST['hsa']);
    $esa = trim($_POST['esa']);
    $ra = trim($_POST['ra']);
    $byie = trim($_POST['byie']);
    $bir = trim($_POST['bir']);

    $bisISPInput = trim($_POST['bisISPInput']);
	$bisISInput = trim($_POST['bisISInput']);
	$bisASInput = trim($_POST['bisASInput']);
	$bisHSInput = trim($_POST['bisHSInput']);
	$bisSDInput = trim($_POST['bisSDInput']);
	$fsaInput = trim($_POST['fsaInput']);
	$isaInput = trim($_POST['isaInput']);
    $laaInput  = trim($_POST['laaInput']);
	$asaInput = trim($_POST['asaInput']);
	$hsaInput = trim($_POST['hsaInput']);
    $esaInput = trim($_POST['esaInput']);
    $raInput = trim($_POST['raInput']);
    $byieInput = trim($_POST['byieInput']);
    $birInput = trim($_POST['birInput']);
    
    
    $bisISPInputWeb = trim($_POST['bisISPInputWeb']);
	$bisISInputWeb = trim($_POST['bisISInputWeb']);
	$bisASInputWeb = trim($_POST['bisASInputWeb']);
	$bisHSInputWeb = trim($_POST['bisHSInputWeb']);
    $laaInputWeb  = trim($_POST['laaInputWeb']);
	$bisSDInputWeb = trim($_POST['bisSDInputWeb']);
	$fsaInputWeb = trim($_POST['fsaInputWeb']);
	$isaInputWeb = trim($_POST['isaInputWeb']);
	$asaInputWeb = trim($_POST['asaInputWeb']);
	$hsaInputWeb = trim($_POST['hsaInputWeb']);
    $esaInputWeb = trim($_POST['esaInputWeb']);
    $raInputWeb = trim($_POST['raInputWeb']);
    $byieInputWeb = trim($_POST['byieInputWeb']);
    $birInputWeb = trim($_POST['birInputWeb']);
    
	$user = '';
	
    //validate codes first
    $queryOne = "SELECT * FROM tmp WHERE codes = '$code'";
    $query_runOne = mysqli_query($con,$queryOne);
    while($rows = mysqli_fetch_array($query_runOne)){
        $codes = "{$rows['codes']}";
    }
    if($codes != $code){
        echo '<script language="javascript">';
        echo 'alert("Please give valid codes");location.href="./regNominees.php";';
        echo '</script>';
        exit;
    }else{
        $sql = "delete from tmp WHERE codes = '$code'";
        $con->query($sql);
    }

    //validation for the inputs 
	if( $laaInput != "" || $bisISPInput != "" || $bisISInput != "" || $bisASInput != "" ||  $bisHSInput != "" ||  $bisSDInput != "" || $fsaInput != "" || $isaInput != "" || $asaInput != "" ||$hsaInput != "" || $esaInput != "" || $raInput != "" || $byieInput != "" || $birInput != ""){
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo '<script language="javascript">';
            echo 'alert("Invalid email address");location.href="./regNominees.php";';
            echo '</script>';
            exit;
        }
        if($name == "" || $email == "" || $code == ""){
            echo '<script language="javascript">';
            echo 'alert("Please fill out the form");location.href="./regNominees.php";';
            echo '</script>';
            exit;
        }

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


        //check if user inserted new company
        if($bisISPInput != ""){
            $sql = "INSERT INTO wapendekezwa (companyName,companyAddress,contact,status,type) VALUES ('$bisISPInput','$bisISPInputWeb','user','Not Active',1)";
            if ($con->query($sql) === TRUE){
                $queryOne = "SELECT * FROM wapendekezwa WHERE companyName = '$bisISPInput'";
                $query_runOne = mysqli_query($con,$queryOne);
                $upOne = mysqli_num_rows($query_runOne); 
                if($upOne > 0){
                    while($rows = mysqli_fetch_array($query_runOne)){
                        $id = "{$rows['id']}";
                    }
                }
                $bisISP = $id;
            }
        }

        if($bisISInput  != ""){
            $sql = "INSERT INTO wapendekezwa (companyName,companyAddress,contact,status,type) VALUES ('$bisISInput ','$bisISInputWeb','user','Not Active',2)";
            if ($con->query($sql) === TRUE){
                $queryOne = "SELECT * FROM wapendekezwa WHERE companyName = '$bisISInput'";
                $query_runOne = mysqli_query($con,$queryOne);
                $upOne = mysqli_num_rows($query_runOne); 
                if($upOne > 0){
                    while($rows = mysqli_fetch_array($query_runOne)){
                        $id = "{$rows['id']}";
                    }
                }
                $bisIS  = $id;
            }
        }

        if($bisASInput != ""){
            $sql = "INSERT INTO wapendekezwa (companyName,companyAddress,contact,status,type) VALUES ('$bisASInput','$bisASInputWeb','user','Not Active',3)";
            if ($con->query($sql) === TRUE){
                $queryOne = "SELECT * FROM wapendekezwa WHERE companyName = '$bisASInput'";
                $query_runOne = mysqli_query($con,$queryOne);
                $upOne = mysqli_num_rows($query_runOne); 
                if($upOne > 0){
                    while($rows = mysqli_fetch_array($query_runOne)){
                        $id = "{$rows['id']}";
                    }
                }
                $bisAS = $id;
            }
        }

        if($bisHSInput != ""){
            $sql = "INSERT INTO wapendekezwa (companyName,companyAddress,contact,status,type) VALUES ('$bisHSInput','$bisHSInputWeb','user','Not Active',4)";
            if ($con->query($sql) === TRUE){
                $queryOne = "SELECT * FROM wapendekezwa WHERE companyName = '$bisHSInput'";
                $query_runOne = mysqli_query($con,$queryOne);
                $upOne = mysqli_num_rows($query_runOne); 
                if($upOne > 0){
                    while($rows = mysqli_fetch_array($query_runOne)){
                        $id = "{$rows['id']}";
                    }
                }
                $bisHS = $id;
            }
        }
        
        if($bisSDInput != ""){
            $sql = "INSERT INTO wapendekezwa (companyName,companyAddress,contact,status,type) VALUES ('$bisSDInput','$bisSDInputWeb','user','Not Active',5)";
            if ($con->query($sql) === TRUE){
                $queryOne = "SELECT * FROM wapendekezwa WHERE companyName = '$bisSDInput'";
                $query_runOne = mysqli_query($con,$queryOne);
                $upOne = mysqli_num_rows($query_runOne); 
                if($upOne > 0){
                    while($rows = mysqli_fetch_array($query_runOne)){
                        $id = "{$rows['id']}";
                    }
                }
                $bisSD = $id;
            }
        }
        
        if($fsaInput != ""){
            $sql = "INSERT INTO wapendekezwa (companyName,companyAddress,contact,status,type) VALUES ('$fsaInput','$fsaInputWeb','user','Not Active',6)";
            if ($con->query($sql) === TRUE){
                $queryOne = "SELECT * FROM wapendekezwa WHERE companyName = '$fsaInput'";
                $query_runOne = mysqli_query($con,$queryOne);
                $upOne = mysqli_num_rows($query_runOne); 
                if($upOne > 0){
                    while($rows = mysqli_fetch_array($query_runOne)){
                        $id = "{$rows['id']}";
                    }
                }
                $fsa = $id;
            }
        }

        if($isaInput != ""){
            $sql = "INSERT INTO wapendekezwa (companyName,companyAddress,contact,status,type) VALUES ('$isaInput','$isaInputWeb','user','Not Active',7)";
            if ($con->query($sql) === TRUE){
                $queryOne = "SELECT * FROM wapendekezwa WHERE companyName = '$isaInput'";
                $query_runOne = mysqli_query($con,$queryOne);
                $upOne = mysqli_num_rows($query_runOne); 
                if($upOne > 0){
                    while($rows = mysqli_fetch_array($query_runOne)){
                        $id = "{$rows['id']}";
                    }
                }
                $isa = $id;
            }
        }

        if($asaInput != ""){
            $sql = "INSERT INTO wapendekezwa (companyName,companyAddress,contact,status,type) VALUES ('$asaInput','$asaInputWeb','user','Not Active',8)";
            if ($con->query($sql) === TRUE){
                $queryOne = "SELECT * FROM wapendekezwa WHERE companyName = '$asaInput'";
                $query_runOne = mysqli_query($con,$queryOne);
                $upOne = mysqli_num_rows($query_runOne); 
                if($upOne > 0){
                    while($rows = mysqli_fetch_array($query_runOne)){
                        $id = "{$rows['id']}";
                    }
                }
                $asa = $id;
            }
        }

        if($hsaInput != ""){
            $sql = "INSERT INTO wapendekezwa (companyName,companyAddress,contact,status,type) VALUES ('$hsaInput','$hsaInputWeb','user','Not Active',9)";
            if ($con->query($sql) === TRUE){
                $queryOne = "SELECT * FROM wapendekezwa WHERE companyName = '$hsaInput'";
                $query_runOne = mysqli_query($con,$queryOne);
                $upOne = mysqli_num_rows($query_runOne); 
                if($upOne > 0){
                    while($rows = mysqli_fetch_array($query_runOne)){
                        $id = "{$rows['id']}";
                    }
                }
                $hsa = $id;
            }
        }

        if($esaInput != ""){
            $sql = "INSERT INTO wapendekezwa (companyName,companyAddress,contact,status,type) VALUES ('$esaInput','$esaInputWeb','user','Not Active',10)";
            if ($con->query($sql) === TRUE){
                $queryOne = "SELECT * FROM wapendekezwa WHERE companyName = '$hsaInput'";
                $query_runOne = mysqli_query($con,$queryOne);
                $upOne = mysqli_num_rows($query_runOne); 
                if($upOne > 0){
                    while($rows = mysqli_fetch_array($query_runOne)){
                        $id = "{$rows['id']}";
                    }
                }
                $esa = $id;
            }
        }

        if($raInput != ""){
            $sql = "INSERT INTO wapendekezwa (companyName,companyAddress,contact,status,type) VALUES ('$raInput','$raInputWeb','user','Not Active',11)";
            if ($con->query($sql) === TRUE){
                $queryOne = "SELECT * FROM wapendekezwa WHERE companyName = '$raInput'";
                $query_runOne = mysqli_query($con,$queryOne);
                $upOne = mysqli_num_rows($query_runOne); 
                if($upOne > 0){
                    while($rows = mysqli_fetch_array($query_runOne)){
                        $id = "{$rows['id']}";
                    }
                }
                $ra = $id;
            }
        }

        if($byieInput != ""){
            $sql = "INSERT INTO wapendekezwa (companyName,companyAddress,contact,status,type) VALUES ('$byieInput','$byieInputWeb','user','Not Active',12)";
            if ($con->query($sql) === TRUE){
                $queryOne = "SELECT * FROM wapendekezwa WHERE companyName = '$byieInput'";
                $query_runOne = mysqli_query($con,$queryOne);
                $upOne = mysqli_num_rows($query_runOne); 
                if($upOne > 0){
                    while($rows = mysqli_fetch_array($query_runOne)){
                        $id = "{$rows['id']}";
                    }
                }
                $byie = $id;
            }
        }

        if($birInput != ""){
            $sql = "INSERT INTO wapendekezwa (companyName,companyAddress,contact,status,type) VALUES ('$birInput','$birInputWeb','user','Not Active',13)";
            if ($con->query($sql) === TRUE){
                $queryOne = "SELECT * FROM wapendekezwa WHERE companyName = '$birInput'";
                $query_runOne = mysqli_query($con,$queryOne);
                $upOne = mysqli_num_rows($query_runOne); 
                if($upOne > 0){
                    while($rows = mysqli_fetch_array($query_runOne)){
                        $id = "{$rows['id']}";
                    }
                }
                $bir = $id;
            }
        }

        if($laaInput != ""){
            $sql = "INSERT INTO wapendekezwa (companyName,companyAddress,contact,status,type) VALUES ('$laaInput','$laaInputWeb','user','Not Active',14)";
            if ($con->query($sql) === TRUE){
                $queryOne = "SELECT * FROM wapendekezwa WHERE companyName = '$laaInput'";
                $query_runOne = mysqli_query($con,$queryOne);
                $upOne = mysqli_num_rows($query_runOne); 
                if($upOne > 0){
                    while($rows = mysqli_fetch_array($query_runOne)){
                        $id = "{$rows['id']}";
                    }
                }
                $laa = $id;
            }
        }

        $sql2 = "INSERT INTO wapendekezanawapendekezwa (categoriesFK,pendekezaID,pendekezwaID,status) VALUES (3,'$user','$bisISP','not confirmed')";
        $sql3 = "INSERT INTO wapendekezanawapendekezwa (categoriesFK,pendekezaID,pendekezwaID,status) VALUES (3,'$user','$bisIS','not confirmed')";
        $sql4 = "INSERT INTO wapendekezanawapendekezwa (categoriesFK,pendekezaID,pendekezwaID,status) VALUES (3,'$user','$bisAS','not confirmed')";
        $sql5 = "INSERT INTO wapendekezanawapendekezwa (categoriesFK,pendekezaID,pendekezwaID,status) VALUES (3,'$user','$bisHS','not confirmed')";
        $sql6 = "INSERT INTO wapendekezanawapendekezwa (categoriesFK,pendekezaID,pendekezwaID,status) VALUES (3,'$user','$bisSD','not confirmed')";

        $sql7 = "INSERT INTO wapendekezanawapendekezwa (categoriesFK,pendekezaID,pendekezwaID,status) VALUES (4,'$user','$fsa','not confirmed')";
        $sql8 = "INSERT INTO wapendekezanawapendekezwa (categoriesFK,pendekezaID,pendekezwaID,status) VALUES (7,'$user','$isa','not confirmed')";
        $sql9 = "INSERT INTO wapendekezanawapendekezwa (categoriesFK,pendekezaID,pendekezwaID,status) VALUES (8,'$user','$asa','not confirmed')";
        $sql10 = "INSERT INTO wapendekezanawapendekezwa (categoriesFK,pendekezaID,pendekezwaID,status) VALUES (11,'$user','$hsa','not confirmed')";
        $sql11 = "INSERT INTO wapendekezanawapendekezwa (categoriesFK,pendekezaID,pendekezwaID,status) VALUES (12,'$user','$esa','not confirmed')";
        $sql12 = "INSERT INTO wapendekezanawapendekezwa (categoriesFK,pendekezaID,pendekezwaID,status) VALUES (13,'$user','$ra','not confirmed')";
        $sql13 = "INSERT INTO wapendekezanawapendekezwa (categoriesFK,pendekezaID,pendekezwaID,status) VALUES (14,'$user','$byie','not confirmed')";
        $sql14 = "INSERT INTO wapendekezanawapendekezwa (categoriesFK,pendekezaID,pendekezwaID,status) VALUES (15,'$user','$bir','not confirmed')";
        $sql15 = "INSERT INTO wapendekezanawapendekezwa (categoriesFK,pendekezaID,pendekezwaID,status) VALUES (19,'$user','$laa','not confirmed')";
        
        $con->query($sql2);
        $con->query($sql3);
        $con->query($sql4);
        $con->query($sql5);
        $con->query($sql6);
        $con->query($sql7);
        $con->query($sql8);
        $con->query($sql9);
        $con->query($sql10);
        $con->query($sql11);
        $con->query($sql12);
        $con->query($sql13);
        $con->query($sql14);
        $con->query($sql15);
        echo '<script language="javascript">';
        echo 'alert("congrats!!! You have Successfull nominate");location.href="./regNominees.php";';
        echo '</script>';
	}else{
        echo '<script language="javascript">';
        echo 'alert("You have to nominate in atleast one category");location.href="./regNominees.php";';
        echo '</script>';
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