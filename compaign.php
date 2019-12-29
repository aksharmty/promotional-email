<?php 
@session_start();
include("../connect.php");
if(isset($_SESSION['username']))
{
$id=$_GET['id'];
 if(isset($_POST['submit']))
	{
	extract($_POST);
	$resup=mysqli_fetch_array(mysqli_query($connection,"select * from `email` where `id`='$id'"));
$image_name=$_FILES["file1"]["name"];
				if($image_name!='')
				{
			$tem_name=$_FILES["file1"]["tmp_name"];
			$path="project/".strtotime("now").$image_name;		
			move_uploaded_file($tem_name,$path);
			$resup=mysqli_fetch_array(mysqli_query($connection,"select * from `email` where `id`='$id'"));
	$target=$resup['image'];
	if($target!='')
	{
	$p="$target";
	unlink($p);
	}
			$up1=mysqli_query($connection,"update  `email` set `image`='$path' where `id`='$id'");
			}
			

$update=mysqli_query($connection,"update  `email` set `title`='$title',`contants`='$contants' where `id`='$id' ");

				$msg= $resup['title']." Add Successfully";

				

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

	<?php 
	$res=mysqli_fetch_array(mysqli_query($connection,"select * from `email` where `id`='$id' "));
	?>

	<table width="100%" border="1" align="center" cellpadding="9" cellspacing="0" bordercolor="#000000">

            

          <tr>

            <td height="21" colspan="2" align="center" bgcolor="#1889CF"><span class="style2"><font size="4">Add <?php echo $res['title']?> Data</font> </span></td>
            </tr>

              <tr>
                <td colspan="2"   class="style6"><div align="center"><?php echo $msg;  ?></div></td>
                </tr>
              

             
			  	

            <tr>

                <td bgcolor="#B9DCFF" class="field"><span class="style3">  Titla</span></td>

                <td align="left">

                    <input name="title" type="text" class="data" id="title" size="70" value="<?php echo $res['title']?>"/></td>
              </tr>

              

              <tr>

                <td class="field"> Description </td>

                <td align="left">

                    <textarea id="contants" name="contants"><?php echo $res['contants']?></textarea><script type="text/javascript">CKEDITOR.replace( 'contants' );</script></td>
              </tr>

 <?php /*?><tr>

                <td height="35" class="field"><strong>Image</strong></td>

                <td align="left">

                   <img src="<?php echo $res['image']?>" width="165" height="111" />                    </td>
              </tr>
              <tr>

                <td height="35" class="field"><strong>Image</strong></td>

                <td align="left">


                    <input name="file1" type="file" class="data" id="file1"  />
                  </td>
              </tr><?php */?>

			  

              <!--<tr>

                <td height="35" class="field"><strong>Image2</strong></td>

                <td align="left"><input name="file2" type="file" class="data" id="file2" size="60"/></td>

                </tr>

              <tr>

                <td height="35" class="field"><strong>Image3</strong></td>

                <td align="left"><input name="file3" type="file" class="data" id="file3" size="60"/></td>

                </tr>

              <tr>

                <td height="35" class="field"><strong>Image4</strong></td>

                <td align="left"><input name="file4" type="file" class="data" id="file4" size="60"/></td>

                </tr>-->

           <tr></tr>

			  

              <tr>
            <td colspan="2" align="center"><input name="submit" type="submit" value="Update" onclick="return fun()"/></td>
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
header('location:index.php');

}

?>



