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

<script src="https://cdn.ckeditor.com/4.13.0/standard/ckeditor.js"></script>



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
if (isset($_REQUEST['title'])){
        // removes backslashes
 $title = stripslashes($_REQUEST['title']);
        //escapes special characters in a string
 $title = mysqli_real_escape_string($connection,$title); 
 
 $fromemail = stripslashes($_REQUEST['fromemail']);
        //escapes special characters in a string
 $fromemail = mysqli_real_escape_string($connection,$fromemail); 
 
 $replyto = stripslashes($_REQUEST['replyto']);
        //escapes special characters in a string
 $replyto = mysqli_real_escape_string($connection,$replyto); 
 
 $contants = stripslashes($_REQUEST['contants']);
 $contants = mysqli_real_escape_string($connection,$contants);
  $date = date("Y-m-d");
 
        $query = "INSERT INTO `email`(`title`,`fromemail`,`replyto`, `contants`,`date`) VALUES ('$title', '$fromemail','$replyto', '$contants','$date')";
        $result = mysqli_query($connection,$query);
        if($result){
            
            echo "<div class='form'>
<h3>New compaign saved successfully.<br><br>
</h3>
<br/><h1>Reset Subcriber List.<br> If you not reset , email not sending all members because this script sending always last submited compaigning. So please <a href='reset.php'> <b>click me </b> </a>and reset list</h1> 
</div>";


        }
    }else{
?>
<form action="#" method="post">
 	<table width="100%" border="1" align="center" cellpadding="9" cellspacing="0" bordercolor="#000000">

            

          <tr>

            <td height="21" colspan="2" align="center" bgcolor="#1889CF"><span class="style2"><font size="4">Add <?php echo $res['title']?> Data</font> </span></td>
            </tr>

              <tr>
                <td colspan="2"   class="style6"><div align="center"><?php echo $msg;  ?></div></td>
                </tr>
              <tr>

                <td bgcolor="#B9DCFF" class="field"><span class="style3"> From Email </span></td>

                <td align="left">

                    <input name="fromemail" type="text" class="data" id="fromemail" size="70" value=" noreply@<? echo $_SERVER['SERVER_NAME']; ?>"readonly/></td>
              </tr>
              <tr>

                <td bgcolor="#B9DCFF" class="field"><span class="style3">  Send Reply to</span></td>

                <td align="left">

                    <input name="replyto" type="text" class="data" id="replyto" size="70" placeholder=" write your email where your want user sent reply"/></td>
              </tr>

            <tr>

                <td bgcolor="#B9DCFF" class="field"><span class="style3">  Titla</span></td>

                <td align="left">

                    <input name="title" type="text" class="data" id="title" size="70" placeholder=" Title"/></td>
              </tr>

              

              <tr>

                <td class="field"> Description </td>

                <td align="left">

                    <textarea id="contants" name="contants"><?php echo $res['contants']?></textarea><script type="text/javascript">CKEDITOR.replace( 'contants' );</script></td>
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



