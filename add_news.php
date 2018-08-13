
<!DOCTYPE html>
<html>
<head>
</head>
<body>
<form id="form1" name="form1" method="post" action="add.php">

<table width="400" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
<tr>

<td>
<table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
<tr>
<td colspan="3" bgcolor="#E6E6E6"><strong>Add NEWS</strong> </td>
</tr>
<tr>
<td width="14%"><strong>Heading</strong></td>
<td width="2%">:</td>
<td width="84%"><input name="topic" type="text" id="topic" size="50" required /></td>
</tr>
<tr>
<td valign="top"><strong>Description</strong></td>
<td valign="top">:</td>
<td><textarea name="detail" cols="50" rows="3" id="detail"></textarea></td>
</tr>
<tr>
<td><strong>Name</strong></td>
<td>:</td>
<td><input name="name" type="text" id="name" size="50" pattern="[a-zA-Z. _]+" required /></td>
</tr>
<tr>
<td><strong>Email</strong></td>
<td>:</td>
<td><input name="email" type="text" id="email" size="50" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required /></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td><input type="submit" name="Submit" value="Submit" /> 
<input type="reset" name="Submit2" value="Reset" /></td>
</tr>
</table>
</td>

</tr>
</table>

</form>
</body>
</html>
