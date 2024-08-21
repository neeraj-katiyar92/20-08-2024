<?php

header('Access-Control-Allow-Origin: *');

// Include required PHPMailer files
require 'includes/PHPMailer.php';
require 'includes/SMTP.php';
require 'includes/Exception.php';

// Define name spaces
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Create instance of PHPMailer
$mail = new PHPMailer();

// Set mailer to use SMTP
$mail->isSMTP();
$mail->Host = "bom1plzcpnl493875.prod.bom1.secureserver.net";
$mail->SMTPAuth = true;
$mail->SMTPSecure = "tls";
$mail->Port = "587";
$mail->Username = "no-reply@dlf.ltd";
$mail->Password = "wPK-z4[x{9@8";

// Check if the form is submitted
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];

    $city = $_POST['city'];
    $position = $_POST['position'];
    $joblocation = $_POST['joblocation'];


    $email_message = "Form details below.\n\n <br>";
    $email_message .= "Name: " . $name . "\n <br>";
    $email_message .= "Phone: " . $phone . "\n <br>";
    $email_message .= "Email ID: " . $email . "\n <br>";

     $email_message .= "City: " . $city . "\n <br>";
     $email_message .= "Position: " . $position . "\n <br>";
     $email_message .= "Joblocation: " . $joblocation . "\n <br>";

    // Set the email subject and sender
    $mail->Subject = "Fit Club Career";
    $mail->setFrom('no-reply@dlf.ltd', $name);
    $mail->isHTML(true);
    $mail->Body = $email_message;

    // Add recipients
    // $mail->addAddress('info@fitclub.co.in');
    $mail->addAddress('sandeeppcexpert@gmail.com');
    // $mail->addAddress('jawaharbellator@gmail.com');


    // Handle file upload
    if (isset($_FILES['myfile']) && $_FILES['myfile']['error'] == UPLOAD_ERR_OK) {
        $fileTmpPath = $_FILES['myfile']['tmp_name'];
        $fileName = $_FILES['myfile']['name'];
        $fileSize = $_FILES['myfile']['size'];
        $fileType = $_FILES['myfile']['type'];
        $fileNameCmps = explode(".", $fileName);
        $fileExtension = strtolower(end($fileNameCmps));

        $allowedfileExtensions = ['pdf', 'docx', 'doc'];
        if (in_array($fileExtension, $allowedfileExtensions) && $fileSize <= 5242880) { // 5MB limit
            // Ensure the uploaded_files directory exists and is writable
            $uploadFileDir = './uploaded_files/';
            if (!is_dir($uploadFileDir)) {
                mkdir($uploadFileDir, 0777, true);
            }
            if (!is_writable($uploadFileDir)) {
                chmod($uploadFileDir, 0777);
            }

            $dest_path = $uploadFileDir . $fileName;

            if (move_uploaded_file($fileTmpPath, $dest_path)) {
                // Attach the file to the email
                $mail->addAttachment($dest_path);
                $email_message .= "File uploaded: " . $fileName . "\n <br>";
            } else {
                echo "Error moving the uploaded file.";
            }
        } else {
            echo "Invalid file extension or file size too large.";
        }
    } else {
        echo "File upload error.";
    }

    // Send the email
    if ($mail->send()) {
        header("Location: ../thankyou.php");
        $data['success'] = true;
        $data['message'] = 'Success!';
    } else {
        $data['success'] = false;
        $data['errors'] = "Failed";
    }
} else {
    $data['success'] = false;
    $data['errors'] = "Failed";
}

// Closing smtp connection
$mail->smtpClose();

echo json_encode($data);

die();

?>
