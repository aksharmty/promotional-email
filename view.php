<?php
include_once"connect.php";
$id=$_GET['id'];
?>

 <?php
// sendemail 
$sql1 = mysqli_fetch_array(mysqli_query($connection, "SELECT * FROM email WHERE id=$id "));
$sql2 = $sql1['title'];
$sql3 = $sql1['contants'];
$sql4 = $sql1['fromemail'];
$sql5 = $sql1['website'];
$sql6 = $sql1['replyto'];
?>
 


<!DOCTYPE html>
<html lang="zxx">

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Preview Compaingn</title>
       <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Fonts -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Dosis:400,700' rel='stylesheet' type='text/css'>

    </head>

<body>
  <?php include "header1.php" ?>
		<center>

               <?php
// If form submitted, insert values into the database.
if (isset($_REQUEST['email'])){
        // removes backslashes
 $email = stripslashes($_REQUEST['email']);
 $email = mysqli_real_escape_string($connection,$email);
 
             
               // Your subject
                 $subject=$sql2;
               
                // From
                $header="from: Sakhi Hosting Newsletter Demo < $sql4 >";
                $headers .= "Reply-To: $sql6 \r\n";
                
                // Your message
                $message=
                "Dear  $dat2,\n\n
                $sql3 \n";
         }
    else{
?><?php } ?>
<br><font color="#000">
<? echo $sql2; ?><br><br>
<? echo $sql3; ?><br><br>
<!--More Details Visit :<? //echo $sql5; ?> --><br><br></font>

                       
    </center>                       
                   


  
</body>

</html>

