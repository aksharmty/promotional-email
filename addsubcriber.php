<?php 
@session_start();
include("connect.php");
if(isset($_SESSION['username'])){
    
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

	<html xmlns="http://www.w3.org/1999/xhtml">

	<head>

	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

	<title>Admin Section</title>

	<style>

	.msg

	{

	text-decoration:none;

	font-family:Arial, Helvetica, sans-serif;

	font-size:24px;

	color:#990000;

	}

.style2 {

	color: #FFFFFF;

	font-weight: bold;

	font-family: Arial, Helvetica, sans-serif;

}

    .style3 {

	font-family: Arial, Helvetica, sans-serif;

	font-weight: bold;

}

    .style4 {font-family: Arial, Helvetica, sans-serif}
.style6 {
	color: #FF0000;
	font-weight: bold;
	font-size: 16px;
	font-family: Arial, Helvetica, sans-serif;
}
    </style>


	</head>

	<body style="margin:0pt; padding:0pt" onload="DisplayTime()">
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
<?php
require('connect.php');
// If form submitted, insert values into the database.
if (isset($_REQUEST['email'])){
        // removes backslashes
 $email = stripslashes($_REQUEST['email']);
        //escapes special characters in a string
 $email = mysqli_real_escape_string($connection,$email); 
 
 $hits = stripslashes($_REQUEST['hits']);
 $hits = mysqli_real_escape_string($connection,$hits);
 
        $query = "INSERT INTO `user`(`email`, `hits`) VALUES ('$email', '$hits')";
        $result = mysqli_query($connection,$query);
        if($result){
            
            echo "<div class='form'>
<h3>New Subcriber saved successfully.<br><br>
</h3>
<br/> <a href='addsubcriber.php'>Add Another page</a> &nbsp;&nbsp;&nbsp; <a href='subcriberlist.php'>Show All Pages </a>
</div>";


        }
    }else{
?>
<form action="#" method="post">
 	<table width="100%" border="1" align="center" cellpadding="9" cellspacing="0" bordercolor="#000000">

            

          <tr>

            <td height="21" colspan="2" align="center" bgcolor="#1889CF"><span class="style2"><font size="4">Add <?php echo $res['email']?> Subcriber</font> </span></td>
            </tr>

              <tr>
                <td colspan="2"   class="style6"><div align="center"><?php echo $msg;  ?></div></td>
                </tr>
              

             
			  	

            <tr>

                <td bgcolor="#B9DCFF" class="field"><span class="style3">  Email</span></td>

                <td align="left">

                    <input name="email" type="email" class="data" id="email" size="70" placeholder=" add subcriber email"/></td>
              </tr>

              

             

               <tr>
            <td colspan="2" align="center"><input name="submitBtn" type="submit" id="submitBtn"
value="Submit"></td>
            </tr>
    </table>
</form>
<?php } ?>
	

	</td>

  </tr>
 <tr>

                <td bgcolor="#B9DCFF" class="field"><span class="style3"> Subcriber Form Code</span></td>
                </tr><tr>

                <td>

                    <textarea rows="50" cols="90">
                    <form action="httpp://<? echo $_SERVER['SERVER_NAME']; ?>/addsubcriber.php" method="post">
 	<table width="100%" border="1" align="center" cellpadding="9" cellspacing="0" bordercolor="#000000">

            

          <tr>

            <td height="21" colspan="2" align="center" bgcolor="#1889CF"><span class="style2"><font size="4">Add <?php echo $res['email']?> Subcriber</font> </span></td>
            </tr>

              <tr>
                <td colspan="2"   class="style6"><div align="center"><?php echo $msg;  ?></div></td>
                </tr>
              

             
			  	

            <tr>

                <td bgcolor="#B9DCFF" class="field"><span class="style3">  Email</span></td>

                <td align="left">

                    <input name="email" type="email" class="data" id="email" size="70" placeholder=" add subcriber email"/></td>
              </tr>

              

             

               <tr>
            <td colspan="2" align="center"><input name="submitBtn" type="submit" id="submitBtn"
value="Submit"></td>
            </tr>
    </table>
</form>
</textarea></td>
              </tr>

</table>


			

			</td></tr></table>

	</form>

	</body>

	</html>

	<?php

} 

else

{
header('location:login.php');

}

?>



