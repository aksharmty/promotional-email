<?php
include("connect.php");
session_start();

$id = $_GET['id'];
$query = mysqli_query($connection,"delete from leftbanner where id='".$id."'");
if($query)
{
header("location:show_leftbanner.php");
}
else
{
echo "Not Delete";
}
?>