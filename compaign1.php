<?php
session_start();
include_once"../connect.php";
if(isset($_SESSION['username']))
{
    $username = $_SESSION['username'];
//

$id=$_GET['id'];
 if(isset($_POST['submit']))
	{
	    $title=$_POST['title'];
	    $contants=$_POST['contants'];
	    $website=$_POST['website'];
	
$sql = "UPDATE email SET title='$title' , contants='$contants', website='$website' WHERE id='$id'";
$msg= "Record updated successfully";
if ($connection->query($sql) === TRUE) {
    echo "Record updated successfully";
    
} else {
    echo "Error updating record: " . $connection->error;
}


	}

?>
<?php
}
else
{
header("location:index.php");
}
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
            <td height="21" colspan="2" align="center" bgcolor="#9F0102" valign="top"><span class="style2">Edit Compaign</span></td>
          </tr>
	  <?php
// Attempt select query execution
$sql = "SELECT * FROM email WHERE id=1";
 $result = mysqli_query($connection, $sql);?>
 <?php
                          if(mysqli_num_rows($result) > 0)
                          {
                               while($row = mysqli_fetch_array($result))
                               {
                          ?>
               



                             <form action="" method="post">
                          <table>
                               <tr><td>From Email:</td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="fromemail" size="70" value="<?php echo $row["fromemail"];?>" readonly/></td></tr>
                               <tr> <td>&nbsp;</td> </tr>
                               <tr><td>Reply to Email:</td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="replyto" size="70" value="<?php echo $row["replyto"];?>" readonly></td></tr>
                               <tr> <td>&nbsp;</td> </tr>
                               <tr><td>Title:</td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="title" size="70" value="<?php echo $row["title"];?>" ></td></tr>
                               <tr> <td>&nbsp;</td> </tr>
                               <tr><td>Contant:</td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<textarea name="contants" rows="20" cols="70"> <?php echo $row["contants"];?> </textarea></td></tr>
                               <tr> <td>&nbsp;</td> <!--td>&nbsp;For new line please write <b> \n\n </b></td --> </tr>
                               <tr><td>Website:</td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="website" size="70" value="<?php echo $row["website"];?>" ></td></tr>
                               <tr> <td>&nbsp;</td> </tr>
                               <tr><td>id:</td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="id" size="70" value="<?php echo $row["id"];?>" readonly></td></tr>
                               <tr><td><font size="3"><b><?php echo $msg;  ?></b></font></td></tr>
                               <tr> <td>&nbsp;</td> </tr>
                               <tr><td><input name="submit" type="submit" value="Update" onclick="return fun()"/>
                               </form></td><td>&nbsp;</td></tr>
                               <tr><td>&nbsp;</td></tr>
                               <tr><td><form action="emailsent.php" method="post">
                            </td><td><input type="text" name="email" size="40" placeholder="Enter Your Email Address " > <input type="submit" name="submit" value="Send Test Email" /></td></tr>
                              
                          </table>
                          </form></td></tr>
                              
               
               <!--tr><td>&nbsp;</td><td><input type="submit" name="submit" value="Update" /></td></tr -->
                              
                          </table>
                          
                          <?php } ?> 
                          <?php } ?> 
                    


 <br><br><br>
   
  
</body>

</html>

