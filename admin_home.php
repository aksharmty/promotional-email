<?php
session_start();
if(isset($_SESSION['username']))
{
?>
	<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
	<html xmlns="http://www.w3.org/1999/xhtml"> 
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<meta name="description: "/>

	<title>Admin Section</title>
	<style>
	.msg
	{
	text-decoration:none;
	font-family:Arial, Helvetica, sans-serif;
	font-size:24px;
	color:#990000;
	}
#Layer1 {
	position:absolute;
	left:248px;
	top:158px;
	width:306px;
	height:38px;
	z-index:1;
}
.style4 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 16px;
	font-weight: bold;
	color: #000000;
}
    </style>
	




	</head>
	<body style="margin:0pt; padding:0pt" onload="DisplayTime()" background="../images/diamond.jpg">
	<table width="900" height="274" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF" style="border-radius:12px; border:#cccccc 1px solid; padding:5px 5px; box-shadow:0 0 10px 0 rgba(30, 30, 30, 0.75);}">
      <tr>
        <td height="30" colspan="2" valign="top"><?php  include("header.php"); ?></td>
      </tr>
      <tr>
        <td width="29%" height="186" valign="top"><?php  include("left.php"); ?></td>
        <td width="71%" height="186" valign="top"><div align="center">
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p class="msg">Welcome to Administrator Area</p>
           <p>&nbsp;<?php include "0totalsent.php" ?></p>
        </div>
       
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p></td>
      </tr>
      <tr>
        <td height="30" colspan="2" valign="top"><?php  include("footer.php"); ?></td>
      </tr>
    </table>
	</body>
	</html>
	<?php
}
else
{
header("location:login.php");
}
?>

