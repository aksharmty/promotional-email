<?php 
session_start();
include("connect.php");

$id=$_GET['id'];


  if(isset($_POST['submit']))
  {
   
	 $url=$_POST['url'];
	 
	 $image_name=$_FILES["file1"]["name"];
			$tmp_name=$_FILES["file1"]["tmp_name"];
	

	if($image_name!=""){
			
			
	 		$path=	"leftbanner/".strtotime("now").$image_name;
			move_uploaded_file($tmp_name,$path);	
			
			$q1=mysqli_query($connection,"UPDATE `leftbanner` SET url='$url', `image`='$path' WHERE `id`='$id' ") or die(mysql_error());  
	}
	else
	{
		
     $query=mysqli_query($connection,"UPDATE `leftbanner` SET `url`='$url'	WHERE `id`='$id' ") or die(mysql_error());  
								}
 if($query)
		{
		   $msg=" Updated Successfully";
		 }
  }


?>
	<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
	<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<title>Admin Area</title>
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
}
    .style3 {
	font-family: Arial, Helvetica, sans-serif;
	font-weight: bold;
}
    </style>
<script type="text/javascript" language="javascript" src="jquery-lib.js"></script>
	</head>
<body style="margin:0pt; padding:0pt" background="image/grey_background.gif">
	<form name="form" action="" method="post" onsubmit="return validate();" enctype="multipart/form-data">

	<table width="900" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF"> 
      <tr>
        <td valign="top" colspan="2"><?php  include("header.php"); ?></td>
      </tr>
          <tr>
            <td width="25%" rowspan="4" valign="top"><?php  include("left.php"); ?></td>
            <td width="75%" align="center" valign="top" style="padding-top:25px;"><table width="980" border="0" align="center" style="border:1px solid #9F0102;">
          <tr valign="top">
            <td height="21" colspan="2" align="center" bgcolor="#3B5998" valign="top"><span class="style2">Update <font size="4">Left</font> Banner Advertisement </span></td>
          </tr>
          <tr>
            <td rowspan="5" valign="top"><table width="100%" border="1" align="center" cellpadding="9" cellspacing="0" bordercolor="#000000">
 <tr>
                <td colspan="2" align="center"><b><?php echo $msg;  ?></b></td>
              </tr>
			  <?php 
			  
			  $res=mysqli_fetch_array(mysqli_query($connection,"SELECT * FROM `leftbanner` WHERE `id`='$id' "));
			  ?>
			   
              <!-- tr>
                <td bgcolor="#9EB1DA" class="field"><span class="style3"> URL</span></td>
                <td align="left">
                    <input name="url" type="text"  size="25" value="<?php echo $res['url'] ; ?>"/></td>
              </tr -->
			   
             
              <tr>
                <td bgcolor="#9EB1DA" class="field"><span class="style3">Image</span></td>
                <td align="left">
				 <img src="<?php echo $res['image']?>" width="237" height="182" />                   </td>
              </tr>
              <tr>
                <td height="35" bgcolor="#9EB1DA" class="field"><span class="style3">Image</span></td>
                <td align="left">
                    <input name="file1" type="file" class="data" id="file1" size="25"/></td>
              </tr>
			  
			  
			 
			 <tr>
            <td colspan="2"><input name="submit" type="submit" value="Update" onclick="return fun()"/></td>
            </tr>
          </table></td></tr></table>
	</form>
	</body>
	</html>
	
