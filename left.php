<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

<title>Untitled Document</title>

<script type="text/javascript" src="drop_down.js"></script>
<style type="text/css">

@import "style3.css";
</style>
</head>
<body>
<table width="23%" height="197" border="1" cellpadding="3" cellspacing="3" bordercolor="#D4BF55">
  <tr>
    <td height="189" valign="top"><table width="77%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td height="31" align="center" valign="middle" class="bor_image"><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>

            <td align="center" valign="top" bgcolor="#E0E0E0"><strong><font size="4">Admin Gallery</font></strong></td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td align="left" valign="top" background="images/center_b.gif">
          <ul id="nav">

              <li> <a href="admin_home.php"><img src="images/nav_home.gif" width="16" height="16" border="0" /> Admin Home</a>              </li>
              <li> <a href="show_password.php"><img src="images/nav_home.gif" width="16" height="16" border="0" /> Change Password</a>              </li>
              <li> <a href="#"><img src="images/nav_home.gif" width="16" height="16" border="0" />Subcriber </a>
              <ul>
                  <li> <a href="addsubcriber.php"> Add Subcriber</a>              </li>
                  <li> <a href="subcriberlist.php">Show Subcriber List</a>              </li>
                  </ul>
                  </li>
              <li> <a href="#"><img src="images/1341559199_sitemap.png" width="16" height="16" border="0" /> Upload Images </a>

    <ul>
                <li><a href="leftbanner.php">Add New Image</a></li>
                 <li><a href="show_leftbanner.php"target="_blank">Show/ & Update Image</a></li>
                </ul>

              </li>  
              <li> <a href="addcompaign.php"><img src="images/vcb.png" width="16" height="16" border="0" /> Add Newsletter </a>
               <li> <a href="compaignlist.php"><img src="images/vcb.png" width="16" height="16" border="0" /> Show All Newsletter </a>

              </li>  
              
              
<li> <a href="logout.php"><img src="images/logout.gif" width="16" height="16" border="0" /> Logout</a>              </li>

          </ul>       </td>

      </tr>

    </table></td>
    <tr><td><?php include "0totalsent.php"?></td></tr>

  </tr>

</table>

</body>

</html>