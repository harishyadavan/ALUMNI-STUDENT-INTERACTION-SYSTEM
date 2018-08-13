<?php
 
$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="studalu"; // Database name 
$tbl_name="news"; // Table name 
 
// Connect to server and select database.
mysql_connect("$host", "$username", "$password","news")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");
 
// get data that sent from form 
$topic=$_POST['topic'];
$detail=$_POST['detail'];
$name=$_POST['name'];
$email=$_POST['email'];
 
//$datetime=date("d/m/y h:i:s"); //create date time
 
$sql="INSERT INTO $tbl_name(heading, description, name, email)VALUES('$topic', '$detail', '$name', '$email')";
$result=mysql_query($sql);
 
if($result){
echo "Successful<BR>";
echo "<a href=view_news.php>View your topic</a>";
}
else {
echo "ERROR";
}
mysql_close();
?>