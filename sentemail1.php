<?php
include ("connect.php");
//order by rand() LIMIT 1
$sql1 = mysqli_fetch_array(mysqli_query($connection, "SELECT * FROM email WHERE id=1 "));
$sql2 = $sql1['title'];
$sql3 = $sql1['contants'];
$sql4 = $sql1['fromemail'];
$sql5 = $sql1['website'];
$sql6 = $sql1['replyto'];
	            echo $sql2; echo $sql3;
//WHERE hits='0'
	         $dat1 = mysqli_fetch_array(mysqli_query($connection, "SELECT email,id FROM user WHERE hits='0' order by rand() LIMIT 1 "));
	            $dat2 = $dat1['email'];
	            $dat3 = $dat1['id'];
	            echo $dat2; echo $dat3;
	            //insert data
$sql = "UPDATE user SET hits=0 WHERE id=$dat3";

if ($connection->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $connection->error;
}

		
		        //email function 
                //ini_set("SMTP", "smtpout.secureserver.net");//confirm smtp
                $to='$dat2';
                
                // Your subject
                 $subject=$sql2;
               
                // From
                $header="from: Akshar Mantra Trantra Yantra < $sql4 >";
                
                // Your message
                $message=
                "Dear  $dat2,\n\n
                $sql3 \n
                Best Regards,\n
                Akshar Mantra Tantra Yantra \n
                Website : $sql5 \n
                Email: aksharmty@ymail.com";
                
                // send email
                $sentmail = mail($to,$subject,$message,$header);

  

?>
 
