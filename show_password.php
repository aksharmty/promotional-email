<?php 
@session_start();
include("connect.php");
if(isset($_SESSION['username'])){
     $username = $_SESSION['username'];
   
?>
	<?php
}
else
{
header("location:login.php");
}
?>
<?php

 if(isset($_POST['submit']))
	{
	   // $username=$_POST['username'];
	    $password=$_POST['password'];
	    //$website=$_POST['website'];
	
$sql = "UPDATE admin_log SET password='$password' WHERE username='$username'";
$msg= "Profile updated";
if ($connection->query($sql) === TRUE) {
   // echo "Record updated successfully";
    
} else {
    echo "Error updating record: " . $connection->error;
}


	}

?>
  <!DOCTYPE html>
<html>
<head>
<title></title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<table width="900" height="533" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">

      <tr>

        <td valign="top" colspan="2"><?php  include("header.php"); ?></td>

      </tr>

          <tr>

            <td width="25%" rowspan="4" valign="top"><?php  include("left.php"); ?></td>

            <td width="75%" align="center" valign="top">

			<table width="100%" border="1" cellspacing="0" cellpadding="9" bordercolor="#000000">

  <tr>

    <td width="100%">
      
<div class="maindiv">
<div class="divA">
<div class="title">
<h2>Update Data Password</h2>
</div>
<div class="divB">


<?php

$sql = "SELECT * FROM admin_log WHERE username='$username'";
 $result = mysqli_query($connection, $sql);?>
 <?php
                          if(mysqli_num_rows($result) > 0)
                          {
                               while($row = mysqli_fetch_array($result))
                               {
                          ?>
<form class='form' method='post'>
<h2>Update Form</h2>
<hr/>
<input class='input' type='hidden' name='id' value='<?php echo $row["id"];?>' />
<!--br />
<label>Name:</label><br />
<input class='input' type='text' name='dname' value='<?php echo $row["uid"];?>' / -->
<br />
<label>Username:</label><br />
<input class='input' type='text' name='username' value='<?php echo $row["username"];?>' readonly/>
<br />
<label>Password:</label><br />
<input class='input' type='text' name='password' value='<?php echo $row["password"];?>' />


</textarea>
<br />
<input class='submit' type='submit' name='submit' value='update' />
</form>
 <?php } } ?>    
<div class="clear"></div>
</div>
<div class="clear"></div>
</div>
</div>
</body>
</html>