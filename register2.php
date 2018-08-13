<!doctype html>
<html>
<body>
<?php

if(isset($_POST['s1']))

{
$Fname=$_POST['f1'];

$Lname=$_POST['l1'];

$dob=$_POST['d1'];

$d=explode('-',$dob);

$d1=getdate();

$dt=$d[2];

$email=$_POST['e1'];

$contact=$_POST['c1'];

$user=$_POST['u1'];

$password=$_POST['pass1'];

$cpassword=$_POST['pass2'];

if(empty($Fname)||empty($Lname)||empty($dob)||empty($email)||empty($contact)||empty($user))

die("error:mandatory fields are empty");

elseif(($d1['year']-$dt)<18)

echo"minnor";

elseif(strcmp($password,$cpassword)!=0)

die("ERROR:password not matching");

else

echo"registration successfull";



}

$connection = mysql_connect("localhost", "root", "","studalu");
mysql_select_db("studalu",$connection);
	
$sql="INSERT INTO registration(`Fname`,`Lname`,`dob`,`email`,`contact`,`user`,`password`,`cpassword`) VALUES('$Fname','$Lname','$dob','$email','$contact','$user','$password','$cpassword')";
$web=mysql_query($sql);
if($web)

{
	echo "<script>alert('Successfull')</script>";
	echo "<script>window.location.href='login1.php'</script>";
	
}
else
{
	echo "<script>alert('Already Registered')</script>";
	echo "<script>window.location.href='login1.php'</script>";
	
}


?>
</body>
</html>
