<?php
//session_start(); 
$name = strip_tags($_POST['fname']);

$lname = strip_tags($_POST['lname']);

$email = strip_tags($_POST['email']);

$company = strip_tags($_POST['company']);

$budget = strip_tags($_POST['budget']);
$contact = strip_tags($_POST['contact']);

$comment = strip_tags($_POST['comment']);


$message =<<<EOF
<html>
<body>
<table align="center">
<tr><th colspan="2">Contact Us</th></tr>
<tr><td>Name :</td><td>$name</td><td>$lname</td></tr>
<tr><td>Email :</td><td>$email</td></tr>
<tr><td>Company :</td><td>$company</td></tr>
<tr><td>Budget :</td><td>$budget</td></tr>
<tr><td>Contact No :</td><td>$contact</td></tr>
<tr><td>Comments:</td><td>$comment</td></tr>
</table>
</body>
</html>
EOF;

?>

<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title></title>
</head>
<body>
<?php

//SMTP needs accurate times, and the PHP time zone MUST be set
//This should be done in your php.ini, but this is how to do it if you don't have access to that
date_default_timezone_set('Etc/UTC');

require 'PHPMailerAutoload.php';

//Create a new PHPMailer instance
$mail = new PHPMailer();

//Tell PHPMailer to use SMTP
$mail->isSMTP();

//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
$mail->SMTPDebug = 0;

//Ask for HTML-friendly debug output
//$mail->Debugoutput = 'html';

//Set the hostname of the mail server
$mail->Host = 'smtp.gmail.com';

//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
$mail->Port = 587;

//Set the encryption system to use - ssl (deprecated) or tls
$mail->SMTPSecure = 'tls';

//Whether to use SMTP authentication
$mail->SMTPAuth = true;

//Username to use for SMTP authentication - use full email address for gmail
$mail->Username = "jithu@alfinesolutions.com";

//Password to use for SMTP authentication
$mail->Password = "jithu321";

//Set who the message is to be sent from
$mail->setFrom('jithu@alfinesolutions.com', 'Contact - VOXINNOV');

//Set an alternative reply-to address
//$mail->addReplyTo('replyto@example.com', 'First Last');

//Set who the message is to be sent to
$mail->addAddress('info@voxinnov.com');
//$mail->addAddress('sunil@voxinnov.com');

// Set email format to HTML
$mail->isHTML(true); 

//Set the subject line
$mail->Subject = 'Contact - VOXINNOV Lets Talk Bussinuss';

//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
//$mail->msgHTML(file_get_contents('contents.html'), dirname(__FILE__));

//Replace the plain text body with one created manually
//$mail->AltBody = 'This is a plain-text message body';

//Attach an image file
//$mail->addAttachment($files);

//$mail->AddAttachment($_FILES['file']['tmp_name'], $_FILES['file']['name']);


$mail->Body    = $message;

//send the message, check for errors

//insert details to database


if (!$mail->send()) {
    //echo "Mailer Error: " . $mail->ErrorInfo;
    echo '<script>alert("Thanks For Contacing Us...We will be in touch soon...");window.location.href="../contact.php";</script>';
} else {
    echo '<script>alert("Message Sent... Thanks For Contacing Us...We will be in touch soon...");window.location.href="../contact.php";</script>';
}

?>
</body>
</html>
