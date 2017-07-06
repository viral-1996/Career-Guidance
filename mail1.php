<?php
require 'PHPMailer/PHPMailerAutoload.php';
$receiver=$_POST['mail'];
$nam=$_POST['uname'];
$quest=$_POST['question'];

$mail = new PHPMailer;

$mail->isSMTP();                                    // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';                     // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                             // Enable SMTP authentication
$mail->Username = 'careergud@gmail.com';            // SMTP username
$mail->Password = '#######'; 						// SMTP password
$mail->SMTPSecure = 'tls';                          // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                  // TCP port to connect to

$mail->setFrom('careergud@gmail.com', 'Career Guidance');
$mail->addReplyTo('careergud@gmail.com', 'Career Guidance');
$mail->addAddress($receiver);   // Add a recipient
$mail->addAddress("careergud@gmail.com");
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');

$mail->isHTML(true);  // Set email format to HTML
// $quest=$_POST['select'];
$bodyContent = '<h1>Hello '.$nam.'</h1>';
$bodyContent .= '<p>Your Question Is:<br><b>'.$quest.'</b></p>';

$mail->Subject = 'Thanks For Reaching To Us.We will reply ASAP';
$mail->Body    = $bodyContent;

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo '<script type="text/javascript">alert("Mail Sent Succesfully.");
		  window.location="home.php";
</script>';
}
?>
