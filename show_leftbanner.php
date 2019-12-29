<?php
session_start();
include("connect.php");
if(isset($_SESSION['username']))// && $_SESSION['whologin']=="modladm")
{
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
    .style3 {font-family: Arial, Helvetica, sans-serif}
    </style>
	
<script type="text/javascript" language="javascript">
function deleteval(id)
{
		var m=confirm("Are you Sure Delete ");
		
		if(m)
		{
				window.location.href='del_leftbanner.php?id='+id;
		
		}
	

}

</script>	
	
	</head>
<body style="margin:0pt; padding:0pt" onload="DisplayTime()">
	<form name="form" action="" method="post" onsubmit="return validate();">

	<table width="933" height="533" border="1" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
      <tr>
        <td valign="top" colspan="2"><?php  include("header.php"); ?></td>
      </tr>
          <tr>
            <td width="25%" rowspan="4" valign="top"><?php  include("left.php"); ?></td>
            <td width="75%" align="center" valign="top"><br />
			<table width="100%" border="0" cellspacing="1" cellpadding="0" >
  <tr>
    <td height="203">
	<table width="100%" height="186" border="1" align="center" cellpadding="9" cellspacing="0" bordercolor="#000000">

              <tr align="center" class="title" bgcolor="#999999">
			  <th height="21" colspan="16" align="center" bgcolor="#3B5998"><span class="style2"><font size="4">Left  Banner Advertisement</font></span> </th>
              </tr>
              
              <tr align="center" class="title">
			  <th align="center" bgcolor="#9EB1DA"><span class="style3">S.No</span></th>
               
				<th align="center" bgcolor="#9EB1DA"><span class="style3">Image URL </span></th>

                <th align="center" bgcolor="#9EB1DA"><span class="style3">Image</span></th>
             
                
                <th width="8%" align="center" bgcolor="#9EB1DA"><span class="style3">Update</span></th>
                <th width="8%" align="center" bgcolor="#9EB1DA"><span class="style3">Delete</span></th>
                </tr>
              <?php
			  $rowsPerPage = 10;
				$pageNum = 1;
				if(isset($_GET['page']))
				{
					$pageNum = $_GET['page'];
				}
				$offset = ($pageNum - 1) * $rowsPerPage;
				
				$counter=($pageNum -1)*$rowsPerPage + 1;
				
							$query1 = mysqli_query($connection,"SELECT * FROM leftbanner order by id desc LIMIT $offset, $rowsPerPage") or die("Query Fail #1");
							$response1 = mysqli_num_rows($query1);
							if($response1>0)
							{
								for($count=1;$count<=$response1;$count++)
								{
									$data = mysqli_fetch_array($query1);
									?>
             
              <tr class="data">
			  	<td width="3%" align="center"><?php echo $counter;?></td>
               
                
                  <td width="11%" align="justify">http://<? echo $_SERVER['SERVER_NAME']; ?><?php echo $data['url']; ?></td>
               
                
                
                <td width="18%" align="center"><img src="<?php echo $data["image"]; ?>" height="77" width="75" /></td>
                <td width="7%" align="center"><a href="update_leftbanner.php?id=<?php echo $data['id']; ?>" style="text-decoration:none;" >Update</a></td>
                <td width="7%" align="center"><a href="#" onclick="return deleteval(<?php echo $data['id']; ?>);" style="text-decoration:none;"  > Delete </a> </td>
              </tr>
              <tr align="center" class="title"></tr>
              <?php
			  		$counter++;
								}
							}	
						?>
            </table>
	
	</td>
  </tr>
  <?php
  $resultpaging  = mysqli_query($connection,"SELECT * FROM leftbanner order by id desc") or die('Error, query failed');
						$rows = mysqli_num_rows($resultpaging);
						$maxPage = ceil($rows/$rowsPerPage);
						$self = $_SERVER['PHP_SELF'];
						$nav  = '';
						for($page = 1; $page <= $maxPage; $page++)
						{
							if ($page == $pageNum)
							{
								$nav .= " $page "; 
							}
							else
							{
								$nav .= " <a href=\"$self?page=$page\" class=\"new\" style=\"color:#000000\">$page</a> ";
							} 
						}
						if ($pageNum > 1)
						{
							$page  = $pageNum - 1;
							$prev  = " <a href=\"$self?page=$page\" class=\"new\" style=\"color:#000000\">[Prev]</a> ";
							$first = " <a href=\"$self?page=1\" class=\"new\" style=\"color:#000000\">[First Page]</a>" ;
						} 
						else
						{
						   $prev  = '&nbsp;'; 
						   $first = '&nbsp;';
						}
						if ($pageNum < $maxPage)
						{
						   $page = $pageNum + 1;
						   $next = " <a href=\"$self?page=$page\" class=\"new\" style=\"color:#000000\">[Next]</a> ";
						
						   $last = " <a href=\"$self?page=$maxPage\" class=\"new\" style=\"color:#000000\">[Last Page]</a> ";
						} 
						else
						{
						   $next = '&nbsp;';
						   $last = '&nbsp;';
						}
						echo "<tr><td align=\"center\" width=\"100%\"  style=\"color:#000000\"><strong>Page No: ".$first . $prev . "$pageNum of $maxPage" . $next . $last."</strong></td></tr>";
					
					  ?>
</table>

			
			</td>
      </tr></table>
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

