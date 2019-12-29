<?php
session_start();
if(isset($_SESSION['username']))
{
    $username = $_SESSION['username'];

include_once"connect.php";
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

  <?php include "header.php" ?>

		
		<center>
<h2>Test Email Compaign</h2>
			    
 <form action="emailsent.php" method="post">
<table><tr><td>Test Email Addressd:</td>
                            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="hidden" name="page" size="70" value="<? echo $id ?>" ></td>
                            <td>&nbsp;&nbsp;&nbsp;<input type="text" name="email" size="60" placeholder="Enter Your Email Address " ></td></tr>
                               <tr> <td>&nbsp;</td> </tr>
                               <tr><td><a href="compaign.php?id=<? echo $id ?>" class="btn btn-primary"> Edit Contant </a></td><td>&nbsp;</td><td><input type="submit" name="submit" value="Send Test Email" /></td></tr>
                              
                          </table>
                          </form>			
               
<a href="view.php?id=<? echo $id ?>"target="_blank">view in web</a>

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

                       
                           
                   


  
</body>

</html>

