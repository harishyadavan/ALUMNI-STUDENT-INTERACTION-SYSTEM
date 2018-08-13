<?php

session_start();

if(isset($_POST['btn-login']))
{
	$fname = $_POST['fname'];
	$pass = $_POST['password'];
	
    //$mysqli=mysql_connect("localhost","root","","studalu");
	$mysqli = new mysqli("localhost", "root","", "studalu");
			
	$query1 = "select * from registration where user='$fname' and password='$pass'";
			
	$res = $mysqli->query($query1);
	
	print_r($res);
	
	if($res->num_rows == 1)
	{
		$_SESSION['login']=$fname;
		header("location:main_forum.php");
		
	}
	else
	{
		
		echo "<script>alert('Enter Correct UserName OR Password')</script>";
		echo "<script>window.location.href='login1.php'</script>";
		
	}
	
	
	$mysqli->close();
}
?>