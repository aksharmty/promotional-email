<meta http-equiv="refresh" content="1; url=compaignlist.php" />
<?php

include ("connect.php");

$sql = "UPDATE user SET hits=0";

if ($connection->query($sql) === TRUE) {
    echo "Record updated successfully";
} ?>

     
