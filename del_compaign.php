<?php
include("connect.php");
session_start();

$id = $_GET['id'];
$query = mysqli_query($connection,"delete from email where id='".$id."'");
if($query)
{
header("location:compaignlist.php");
}
else
{
echo "Not Delete";
}
?>