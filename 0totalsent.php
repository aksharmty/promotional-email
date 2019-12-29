<b>Last Email Compaign Report:-</b><br>
<?php
include "connect.php";
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql="SELECT hits FROM user";
$sql1="SELECT id FROM user where hits=1";
$sql2="SELECT id FROM user where hits=0";
if ($result=mysqli_query($connection,$sql))
  {
  // Return the number of rows in result set
  $rowcount=mysqli_num_rows($result);
   echo "<b>Total Subcriber :</b>" ;
  printf(" %d \n",$rowcount);
  // Free result set
  mysqli_free_result($result);
  }  
  
 echo "<b><br></b>" ;
if ($result1=mysqli_query($connection,$sql1))
  {
  // Return the number of rows in result set
  $rowcount1=mysqli_num_rows($result1);
  echo "<b>Total email sent :</b>" ;
  printf(" %d \n",$rowcount1);
  // Free result set
  mysqli_free_result($result1);
  }
  
  echo '<b><br></b>';
  if ($result2=mysqli_query($connection,$sql2))
  {
  // Return the number of rows in result set
  $rowcount2=mysqli_num_rows($result2);
  echo "<b>Total email pending :</b>" ;
  printf(" %d \n",$rowcount2);
  // Free result set
  mysqli_free_result($result2);
  }
//mysqli_close($connection);
?>

