<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title></title>

<script type="text/javascript">

function DisplayTime(){
timeElement=document.getElementById? document.getElementById("curTimee"): document.all.tick2;
var CurrentDate=new Date();
var hours=CurrentDate.getHours();
var minutes=CurrentDate.getMinutes();
var seconds=CurrentDate.getSeconds();
if (minutes<=9) minutes="0"+minutes;
if (seconds<=9) seconds="0"+seconds;
var currentTime=hours+":"+minutes+":"+seconds;
timeElement.innerHTML="<font style='font-size:20px;font-weight:bold;'>"+currentTime+"</b>";
setTimeout("DisplayTime()",1000);
}
</script>
<script>
 function fun()
 {
 d=new Date()
 str="Time : " + d.getHours()+" : "+ d.getMinutes() + " : "+ d.getSeconds()
 month = d.getMonth()+1
 day = d.getDate()
 year = d.getFullYear()
 date="Date : " + month + " / " + day + " / " + year
 document.getElementById('time').innerHTML=str
 document.getElementById('date').innerHTML=date
 setTimeout("fun()",1000)
 }
 </script>

<body style="margin:0pt; padding:0pt"  background="images/top-bg.jpeg">
<table width="100%" border="0"  cellpadding="0" cellspacing="0" bgcolor="#FFFFFF"  style="border-radius:10px;">
  <tr>
    <td valign="top" style="border-radius:10px;"><table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#047871">
      
      <tr>
        <td valign="top" bgcolor="#287AB1"><table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" >
          <tr>
            <td width="64%" valign="top" style="padding-top:5px; padding-bottom:5px;"><table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#3C8ED8" >
  <tr>
    <td width="29%" rowspan="2" bgcolor="#FFFFFF"><div align="left"><h1><? echo $_SERVER['SERVER_NAME']; ?></h1></div></td>
    <td width="56%" rowspan="2" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="3%" height="31" bgcolor="#FFFFFF" class="style4"><div align="center" class="style6"><img src="images/nav_home.gif" width="16" height="16" /></div></td>
    <td width="5%" bgcolor="#FFFFFF" class="style4"><a href="admin_home.php" class="adminarea style6"><strong>Home</strong></a> </td>
    <td width="2%" bgcolor="#FFFFFF" class="style4"><div align="center" class="style6"><img src="images/logout.gif" width="16" height="16" /></div></td>
    <td width="5%" bgcolor="#FFFFFF" class="style4"><a href="logout.php" class="adminarea style6"><strong>Logout</strong></a></td>
  </tr>
  <tr>
    <td height="41" colspan="4" bgcolor="#FFFFFF" class="style4" ><span class="style4"><span class="style6"><strong>Date  : <?php echo date("d - m - Y "); ?></strong></span></span></td>
  </tr>

 
</table></td>
          </tr>
        
          </table></td>
      </tr>
    </table></td>
  </tr>
</table>

</body>
</html>
