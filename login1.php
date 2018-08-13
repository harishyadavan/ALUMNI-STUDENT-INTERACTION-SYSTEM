<html>
<head>
<title>Login</title>
<style type="text/css">
h3{font-family: "Comic Sans MS", cursive, sans-serif; font-size: 25pt; font-style: normal; font-weight: bold; color: #987367;
text-align: center;  }
table{font-family: Calibri; color:#3e311d; font-size: 15pt; font-style: normal; background: url('images/bg2.jpg'); border-collapse: collapse; }
table.inner{border: 0px}
body {
	font-size: 12pt;
	line-height: 2em;
	font-family: Georgia, serif;
	background: #56423e url('images/bg.jpg');
	color: #d5d0cf;
}

.mySlides {width:100%; height:350px; margin:0 0 0 0; }
h1 { 
	font-family: "Comic Sans MS", cursive, sans-serif;
	color: #987367;
    display: block;
    font-size: 3em;
    margin-top: 0.67em;
    margin-bottom: 0.67em;
    font-weight: bold;
}

a {
    color:#a2bd52;
}


</style>

</head>
 
<body>


<h1 align="center">LOGIN PAGE</h1>

			
 


<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 4000);
}
</script>

<h3>LOGIN</h3>
<form name="myform" method="post" action="logi.php">
<table align="center" cellpadding = "15">
<!----- User Name ---------------------------------------------------------->
<tr>
<td>USER NAME</td>
<td><input type="text" name="fname" placeholder="Username" required /></td>
</tr>

 <!----- Password ---------------------------------------------------------->
<tr>
<td>PASSWORD</td>
<td><input type="password" name="password" placeholder="Password" required/></td>
</tr>
 
<!----- Submit and Reset ------------------------------------------------->
<tr>
<td colspan="2" align="center">
<input type="submit" name="btn-login" value="Login"></a></br>
Not Registered?
<a href="login1.html">SIGNUP</a><br>
</td>

</tr>
</table>
</div>


 </form>



</body>
</html>