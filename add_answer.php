<?php
 
$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="myforum"; // Database name 
$tbl_name="fanswer"; // Table name 
 
// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");
 
// Get value of id that sent from hidden field 
$id=$_POST['id'];

echo "$id";

$result1="SELECT * from fquestion WHERE id='$id'";
$res=mysql_query($result1);
$row=mysql_fetch_array($res);
 $email = $row['email'];
 

 
// Find highest answer number. 
$sql="SELECT MAX(a_id) AS Maxa_id FROM $tbl_name WHERE question_id='$id'";
$result=mysql_query($sql);
$rows=mysql_fetch_array($result);
 
// add + 1 to highest answer number and keep it in variable name "$Max_id". if there no answer yet set it = 1 
if ($rows) {
$Max_id = $rows['Maxa_id']+1;
}
else {
$Max_id = 1;
}
 
// get values that sent from form 
$a_name=$_POST['a_name'];
$a_email=$_POST['a_email'];
$a_answer=$_POST['a_answer']; 
 
$datetime=date("y/m/d h:i:s"); // create date and time
 
// Insert answer 
$sql2="INSERT INTO $tbl_name(question_id, a_id, a_name, a_email, a_answer, a_datetime)VALUES('$id', '$Max_id', '$a_name', '$a_email', '$a_answer', '$datetime')";
$result2=mysql_query($sql2);
 
if($result2){
echo "Successful<BR>";
echo "<a href='view_topic.php?id=".$id."'>View your answer</a>";
 
// If added new answer, add value +1 in reply column 
$tbl_name2="fquestion";
$sql3="UPDATE $tbl_name2 SET reply='$Max_id' WHERE id='$id'";
$result3=mysql_query($sql3);


$subject='Reminder to Evaluate the Report';
$message="$a_answer";

//$email = "$email"; 

require 'C:\wamp\www\phpproject\phpmailer\PHPMailerAutoload.php';

$mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'yadish.56@gmail.com';                 // SMTP username
$mail->Password = 'y25446269';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->setFrom('yadish.56@gmail.com', 'MCA Project Portal');
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
    echo'<br/> <br/> <br/> <center> <h2> The Email has been sent to the examiner </h2> </center> <hr/>';
	echo "<br/> <center> <form action='main_forum.php' method='post'> <input type='submit' value='   GO BACK   '> </form> </center>";
				
    //echo 'Mailer Error: ' . $mail->ErrorInfo;
} 
else 
{
    echo'<br/> <br/> <br/> <center> <h2> The Email has been sent to the examiner </h2> </center> <hr/>';
	echo "<br/> <center> <form action='go_to_non_evaluated.php' method='post'> <input type='submit' value='   GO BACK   '> </form> </center>";
				
}








}
else {
echo "ERROR";
}
 
// Close connection
mysql_close();
?>