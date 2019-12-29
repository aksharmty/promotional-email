<?php 
session_start();
include("connect.php");
if(isset($_SESSION['username']))
{

 if(isset($_POST['submit']))
	{
			$image_name=$_FILES["file1"]["name"];
			$tmp_name=$_FILES["file1"]["tmp_name"];
			
			
			$path  = "leftbanner/".strtotime("now").$image_name;
			$path1  = "/leftbanner/".strtotime("now").$image_name;
			
					
				move_uploaded_file($tmp_name,$path);
			
						
			
				$url=$_POST['url'];
				
				
				$query="INSERT INTO `leftbanner` (`id`, `url` ,`image`) VALUES (NULL, '$path1', '$path');";
				$insert=mysqli_query($connection,$query) or die("Query Fail");
				if($insert)
				$msg="Banner Inserted Successfully";
				else
				$msg="Some Problem Is There";
			
	}
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
</style>
	<script type="text/javascript" src="ckeditor/ckeditor.js"></script>

	</head>
	<body style="margin:0pt; padding:0pt" onload="DisplayTime()">
	<form id="form1" name="form1" method="post" action="" enctype="multipart/form-data">

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
	
	<table width="100%" border="1" align="center" cellpadding="9" cellspacing="0" bordercolor="#000000">
            
          <tr>
            <td height="21" colspan="3" align="center" bgcolor="#3B5998"><span class="style2"><font size="4">Add  Left Banner Advertisement<br> <span class="field"><?php echo $msg;?></span></font></span></td>
            </tr>
              
              
              <!--tr>
                <td height="35" bgcolor="#9EB1DA" class="field"><strong>URL</strong></td>
                <td colspan="2" align="left"><input name="url" type="text"  id="url" size="25"/></td>
              </tr -->
              <tr>
                <td height="35" bgcolor="#9EB1DA" class="field"><strong>Image</strong></td>
                <td colspan="2" align="left">
                    <input name="file1" type="file"  id="file1" size="25"/></td>
              </tr>
			  
             
              <tr>
            <td colspan="3"><input name="submit" type="submit" value="Submit" /></td>
            </tr>
    </table>
	
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
echo $_SESSION['username'];
header('location:login.php');
}
?>

