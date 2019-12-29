<?php
session_start();
if(isset($_SESSION['username']))
{
    $username = $_SESSION['username'];

include ("connect.php");
$id=$_GET['id'];
?>
<?php
}
else
{
header("location:login.php");
}
?>
 <?php
// If form submitted, insert values into the database.
if (isset($_REQUEST['email'])){
        // removes backslashes
 $email = stripslashes($_REQUEST['email']);
 $email = mysqli_real_escape_string($connection,$email);
 $page = stripslashes($_REQUEST['page']);
 $page = mysqli_real_escape_string($connection,$page);
?>
 
 <?php
// sendemail 
$sql1 = mysqli_fetch_array(mysqli_query($connection, "SELECT * FROM email WHERE id=$page "));
$sql2 = $sql1['title'];
$sql3 = $sql1['contants'];
$sql4 = $sql1['fromemail'];
$sql5 = $sql1['website'];
$sql6 = $sql1['replyto'];
?>
 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
	<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<title>Admin</title>
	<style>
.st1 {font-weight: bold; color:#000000;}
.style2 {
	color: #FFFFFF;
	font-weight: bold;
}  </style>
	</head>
<body style="margin:0pt; padding:0pt" background="image/grey_background.gif">
<table width="900" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
      <tr>
        <td valign="top" colspan="2"><?php  include("header.php"); ?></td>
      </tr>
          <tr>
            <td width="25%" rowspan="4" valign="top"><?php  include("left.php"); ?></td>
            <td width="75%" align="center" valign="top" style="padding-top:25px;"><table width="60%" border="0" align="center" style="border:1px solid #9F0102;">
          <tr valign="top">
            <td height="21" colspan="2" align="center" bgcolor="#9F0102" valign="top"><span class="style2">Email Sent successfully</span></td>
          </tr>
		
	   <center> <a href="view.php?id=<? echo $page ?>"target="_blank">view in web</a></center>
               
<?php
require 'PHPMailer/PHPMailerAutoload.php';

$mail = new PHPMailer;

//$mail->SMTPDebug = 3;                         // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'mail.yourdomain.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'noreply@yourdomain.com';                 // SMTP username
$mail->Password = '3cs4Zl{J2C7u';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->setFrom($sql4, 'Company Name');
$mail->addAddress($email, $email);     // Add a recipient
//$mail->addAddress('ellen@example.com');               // Name is optional
$mail->addReplyTo($sql6, 'Information');
$mail->WordWrap = 50; 
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = $sql2; 
$mail->Body    = $sql3 ; 


if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}
?></div>";

        }
    else{
?>
<?php } ?>

</table>

</body>

</html>

