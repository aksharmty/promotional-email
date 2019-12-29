<?php
$connection = mysqli_connect('localhost', 'namdhjpl_email', 'hgRTR$#$#@2019');
if (!$connection){
    die("Database Connection Failed" . mysqli_error($connection));
}
$select_db = mysqli_select_db($connection, 'namdhjpl_email');
if (!$select_db){
    die("Database Selection Failed" . mysqli_error($connection));
}
?>