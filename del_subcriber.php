<?php
include("connect.php");
session_start();

$id = $_GET['id'];
$query = mysqli_query($connection,"delete from user where id='".$id."'");
if($query)
{
header("location:subcriberlist.php");
}
else
{
echo "Not Delete";
}
?>