<?php
include ("connect.php");
//order by rand() LIMIT 1
$sql1 = mysqli_fetch_array(mysqli_query($connection, "SELECT * FROM email ORDER BY id DESC LIMIT 1"));
$sql2 = $sql1['title'];
$sql3 = $sql1['contants'];
$sql4 = $sql1['fromemail'];
$sql5 = $sql1['website'];
$sql6 = $sql1['replyto'];
$sql7 = $sql1['id'];
	            echo $sql2; echo $sql3;
//WHERE hits='0'
	         $dat1 = mysqli_fetch_array(mysqli_query($connection, "SELECT email,id FROM user WHERE hits='0' order by rand() LIMIT 1 "));
	            $dat2 = $dat1['email'];
	            $dat3 = $dat1['id'];
	            echo $dat2; echo $dat3;
	            //insert data
$sql = "UPDATE user SET hits=1 WHERE id=$dat3";

if ($connection->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $connection->error;
}


?>
 


<?php
require 'PHPMailer/PHPMailerAutoload.php';

$mail = new PHPMailer;

$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'mail.yourdomain.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'noreply@youdomain.com';                 // SMTP username
$mail->Password = '3cs4Zl{J2C7u';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->setFrom($sql4, 'Company Name');
$mail->addAddress($dat2, $dat2);     // Add a recipient
//$mail->addAddress('example@gmail.com');               // Name is optional
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
?>  