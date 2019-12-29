<?php  //Start the Session
session_start();
require('connect.php'); 
//3. If the form is submitted or not.
//3.1 If the form is submitted
if (isset($_POST['username']) and isset($_POST['password'])){
//3.1.1 Assigning posted values to variables.
$username = $_POST['username'];
$password = $_POST['password'];
//3.1.2 Checking the values are existing in the database or not
$query = "SELECT * FROM `admin_log` WHERE username='$username' and password='$password'";
 
$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
$count = mysqli_num_rows($result);
//3.1.2 If the posted values are equal to the database values, then session will be created for the user.
if ($count == 1){
$_SESSION['username'] = $username;

}else{
//3.1.3 If the login credentials doesn't match, he will be shown with an error message.
$fmsg = "Invalid Login Credentials.";
}
}
//3.1.4 if the user is logged in Greets the user with message
if (isset($_SESSION['username'])){
header ("location:admin_home.php");

 
}else{
//3.2 When the user visits the page first time, simple login form will be displayed.
?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="description: This is developed By ... Developed By : sakhihosting"/>

<title>Administrator Login Form</title>
<style type="text/css">
<!--
#Layer1 {
	position:absolute;
	width:263px;
	height:134px;
	z-index:1;
	top: 221px;
	left: 378px;
	overflow: visible;
	visibility: inherit;
	background-color: #5A94AA;
	background-image: url(273415.jpg);
}
.style2 {
	font-family: "Comic Sans MS", Courier, "Bookman Old Style", "Franklin Gothic Medium", Garamond, Haettenschweiler;
	font-size: 24px;
	font-weight: bold;
	color: #EFEFEF;
}
.style3 {font-size: 18px}
.style4 {
	color: #FFFFFF;
	font-weight: bold;
}
.style5 {font-family: Arial, Helvetica, sans-serif}
.style6 {color: #FFFFFF; font-weight: bold; font-family: Arial, Helvetica, sans-serif; }
-->
</style>

</head>
<body  bgcolor="#F2F1F1">
<table width="980" border="0" align="center" background="images/serchBg.png"   style="border-radius:12px; border:#cccccc 1px solid; padding:5px 5px; box-shadow:0 0 10px 0 rgba(30, 30, 30, 0.75);}">
<tr>
      <td bgcolor="#287BB2" >&nbsp;</td>
</tr>
    <tr>
      <td height="69" bgcolor="#FFFFFF" ><div align="center"><? echo $_SERVER['SERVER_NAME']; ?></div></td>
  </tr>
    <tr>
      <td height="18"  ><hr/>  </td>  
    <tr>
  
    <tr>
    <td height="346" ><form name="form" action=""  method="post" onSubmit="return validate();">
<table width="500" border="20" align="center" bordercolor="#000000"     bgcolor="#999999">
<tr><td>
<table width="100%" height="228" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#287BB2" bordercolordark="#0000CC" >
  <tr bgcolor="#FF0066">
    <td height="48" colspan="3" bgcolor="#287BB2"><div align="center" class="style2 style3"> ADMINISTRATOR LOGIN </div></td>
  </tr>
  <tr bgcolor="#009999">
    <td colspan="3" align="center" bgcolor="#287BB2"><div id="msg">
      <?php echo "<font color='yellow'><b>".$fmsg."</b></font>" ?> </div>	 </td>
  </tr>
  <tr bgcolor="#13ADED">
    <td width="32%" rowspan="2" bgcolor="#287BB2"><span class="mytime"><img src="images/1211811760.png" width="142" height="133" /></span></td>
    <td width="23%" height="57" bgcolor="#287BB2"><div align="center" class="style4 style5">Admin Id </div></td>
    <td width="45%" bgcolor="#287BB2"><input name="username" type="text" size="30" /></td>
  </tr>
  <tr>
    <td height="58" bgcolor="#287BB2"><div align="center" class="style6"> Password </div></td>
    <td bgcolor="#287BB2"><input name="password" type="password" size="30" /></td>
  </tr>
  <tr bgcolor="#13ADED">
    <td height="47" colspan="3" bgcolor="#287BB2"><div align="center">
      <input type="Submit" name="Submit" value="Submit" />
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<input type="reset" value="Cancel" />
	</div></td>
  </tr>
</table>
</td></tr>
</table></form>
</table>

</body>
</html>
<?php } ?>