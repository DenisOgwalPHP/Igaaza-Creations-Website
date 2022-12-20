<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';	

$emails=$_POST['emails'];
$messages="Please add me to your Mailing List";
$to = 'info@igaaza.com';
    $subject = $names."Mailing List";
    $message = $messages;
	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type: text/html; charset=iso-8859-1" . "\r\n";
    $headers = 'From:'.$emails. "\r\n" .
        'Reply-To: no-reply@igaaza.com' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();
    echo (mail($to, $subject, $message, $headers)) ? 'Message sent!' : 'Message not sent!';
				echo '<script type="application/javascript">';
				echo'alert("Message Sent");';
				echo'window.location.href="contact.php"';
				echo '</script>';
?>