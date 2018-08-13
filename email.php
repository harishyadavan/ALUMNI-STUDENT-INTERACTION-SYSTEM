<?php


$subject='Reminder to Evaluate the Report';
$message="message";

$email = "suresh_c39@yahoo.com"; 

require 'C:\wamp\www\phpproject\PHPMailer-master\PHPMailerAutoload.php';

$mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'yadish.56@gmail.com';                 // SMTP username
$mail->Password = 'y25446269';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->setFrom('yadish.56@gmail', 'MCA Project Portal');
$mail->addAddress($email);     // Add a recipient
//$mail->addAddress('ellen@example.com');               // Name is optional
//$mail->addReplyTo('info@example.com', 'Information');
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');

//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = $subject;
$mail->Body    = "<h2> Dear Examiner </h2> <br/> <h3>".$message." </h3> <br/> <h3> Please login to MCA project portal to evaluate </h3> <br/>  <h3> Kindly click the below link to Login </h3> <br/> http://projectportal.msrit.edy/portlogin.php <br/>";
$mail->AltBody = $message;

if(!$mail->send()) 
{
    echo'<br/> <br/> <br/> <center> <h2> The Email has been sent  </h2> </center> <hr/>';
	echo "<br/> <center> <form action='go_to_non_evaluated.php' method='post'> <input type='submit' value='   GO BACK   '> </form> </center>";
				
    //echo 'Mailer Error: ' . $mail->ErrorInfo;
} 
else 
{
    echo'<br/> <br/> <br/> <center> <h2> The Email has been sent to the examiner </h2> </center> <hr/>';
	echo "<br/> <center> <form action='go_to_non_evaluated.php' method='post'> <input type='submit' value='   GO BACK   '> </form> </center>";
				
}
    
?>
