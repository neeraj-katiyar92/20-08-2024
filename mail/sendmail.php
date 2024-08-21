<?php

header('Access-Control-Allow-Origin: *');

/*##########Script Information#########
  # Purpose: Send mail Using PHPMailer#
  #          & Gmail SMTP Server 	  #
  # Created: 13-10-2021 			  #
  #	Author : Dinesh Singh			  #
  # Version: 1.0					  #
  #####################################*/

//Include required PHPMailer files
	require 'includes/PHPMailer.php';
	require 'includes/SMTP.php';
	require 'includes/Exception.php';
//Define name spaces
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\SMTP;
	use PHPMailer\PHPMailer\Exception;
//Create instance of PHPMailer
	$mail = new PHPMailer();
//Set mailer to use smtp
// 	$mail->isSMTP();
// 	$mail->SMTPDebug  = 2;
// 	$mail->SMTPDebug = SMTP::DEBUG_SERVER;
//Define smtp host
// 	$mail->Host = "sg2plzcpnl487144.prod.sin2.secureserver.net";
 	$mail->Host = "bom1plzcpnl493875.prod.bom1.secureserver.net";
//	$mail->Host = "smtp.gmail.com";
//Enable smtp authentication
	$mail->SMTPAuth = true;
//Set smtp encryption type (ssl/tls)
	$mail->SMTPSecure = "tls";
//Port to connect smtp
	$mail->Port = "587";
//Set gmail username
/*	$mail->Username = "superiorrealty.in@gmail.com";
	$mail->Password = "Akshay@123";*/
	$mail->Password = "wPK-z4[x{9@8";
	$mail->Username = "no-reply@dlf.ltd";
//Set gmail password
	


	if (isset($_POST['submit'])) {
	    $name = $_POST['name'];
	    $phone = $_POST['mobile'];
    	$email = $_POST['email'];
    // $name = 'test';
	   // $phone = '7897897898';
    // 	$email = 'vkchahar94@gmail.com';
    	
    	$email_message = "Form details below.\n\n <br>";
	
	    $email_message .= "Name: ".$name."\n <br>";
        $email_message .= "Telephone: ".$phone."\n <br>";
        $email_message .= "Email ID: ".$email."\n <br>";

	
        //Email subject
        	$mail->Subject = "Fit Club";
        //Set sender email
        	$mail->setFrom('no-reply@dlf.ltd', $name );
        //Enable HTML
        	$mail->isHTML(true);
        
        //Email body
        	$mail->Body = $email_message;
        //Add recipient
         	$mail->addAddress('info@fitclub.co.in');
         	//$mail->addAddress('panthjyoti12@gmail.com');
         	$mail->addAddress('sandeeppcexpert@gmail.com');
          //	$mail->addAddress('jitendrarn86@gmail.com');
        	//$mail->AddBCC('support@adsbazaar.in');
        //Finally send email
        	if ( $mail->send() ) {
        	    header("Location: ../thankyou.php");
        		$data['success'] = true;
            	$data['message'] = 'Success!';
        	}else{
        		 $data['success'] = false;
            	$data['errors'] = "Failed";
        	}
	}else{
	    	 $data['success'] = false;
            	$data['errors'] = "Failed";   
	}
	
	
//Closing smtp connection
	$mail->smtpClose();

echo json_encode($data);



die();


?>