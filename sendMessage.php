<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'autoload.php';

$mail = new PHPMailer(true);                              // Passing `true` enables exceptions

function sendMailToMe() {
	try {
	//Server settings
	// $mail->SMTPDebug = 2;                                 // Enable verbose debug output
	$mail->isSMTP();                                      // Set mailer to use SMTP
	$mail->Host = 'mail.arenagurgaon.com';  // Specify main and backup SMTP servers
	$mail->SMTPAuth = true;                               // Enable SMTP authentication
	$mail->Username = 'aayush.jaiswal@arenagurgaon.com';                 // SMTP username
	$mail->Password = 'jaiswal88@';                           // SMTP password
	$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
	$mail->Port = 25;                                    // TCP port to connect to

	//Recipients
    $mail->setFrom('no-reply@arenagurgaon.com', 'New Enquiry - DemoShop');
    $mail->addAddress('aayush.jaiswal984@gmail.com', 'Contact us - DemoShop');     // Add a recipient
    // $mail->addAddress('aayush.jaiswal984@gmail.com');               // Name is optional
    $mail->addReplyTo($_POST['emailID'], $_POST['fullname']);
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = $_POST['fullname'] . ' is contact with us.';
    $mail->Body    = '<div style="text-align: left;">
<h1>Demo Shop</h1>
<p><b>Name</b> :'.$_POST['fullname'].'</p>
<p><b>Phone</b> :'.$_POST['mobile'].'</p>
<p><b>Email</b> :'.$_POST['emailID'].'</p>
<p><b>Message</b> :'.$_POST['message'].'</p>
<br/><br/>
<a href="http://prenits.com"><img src="http://prenits.com/img/logo.png" alt="prenits" style="width: 25%;"></a>
</div>';
	    // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
	    $mail->send();
        return true;
	} catch (Exception $e) {
	    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
	}
}

function sendMailToUser() {
	try {
	//Server settings
	// $mail->SMTPDebug = 2;                                 // Enable verbose debug output
	$mail->isSMTP();                                      // Set mailer to use SMTP
	$mail->Host = 'mail.arenagurgaon.com';  // Specify main and backup SMTP servers
	$mail->SMTPAuth = true;                               // Enable SMTP authentication
	$mail->Username = 'aayush.jaiswal@arenagurgaon.com';                 // SMTP username
	$mail->Password = 'jaiswal88@';                           // SMTP password
	$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
	$mail->Port = 25;                                    // TCP port to connect to

	//Recipients
    $mail->setFrom('no-reply@arenagurgaon.com', 'New Enquiry - ArenaGurgaon');
    $mail->addAddress('info@arenagurgaon.com', 'Contact us - ArenaGurgaon');     // Add a recipient
    // $mail->addAddress('aayush.jaiswal984@gmail.com');               // Name is optional
    $mail->addReplyTo($_POST['emailID'], $_POST['fullname']);
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

	$mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Confirmation - you have successfully registered';
    $mail->Body    = '<!DOCTYPE html>
	<html>
	<head>
		<title>Confirmation Mail</title>
	</head>
	<body>
	<div style="text-align: center;">
	<h1>Welcome - Demo Shop</h1>
	<p>This is a confirmation that we have recived your Message and we will contact to you ASAP;</p>
	<br/><br/>
	<img src="http://arenagurgaon.com/port-july-2018/sohna-gurgaon-logo.png" alt="sohna-gurgaon-logo.png" style="width: 103px;">
	</div>
	</body>
	</html>';
	    // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

	    $mail->send();
	    return true;
	} catch (Exception $e) {
	    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
	}
}
if (sendMailToMe() == true AND sendMailToUser() == true) {
	echo "1";
}
?>