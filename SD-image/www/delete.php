<!DOCTYPE HTML>
<head>
<style type="text/css">td { text-align: center; } </style>
</head>

<html>

<h2>RepRap: 
<?php print(getMyName()); ?>
<?php if(gotPassword()) echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://reprappro.com" target="_blank"><img src="logo.png" alt="RepRapPro logo"></a>'; ?>
</h2><br><br>
<?php if(printLinkTable()) echo '<table><tr>
      <td>&nbsp;&nbsp;&nbsp;<a href="control.php">Control</a>&nbsp;&nbsp;&nbsp;</td>

      <td>&nbsp;&nbsp;&nbsp;<a href="print.php">Print</a>&nbsp;&nbsp;&nbsp;</td>

 
    <td>&nbsp;&nbsp;&nbsp;<a href="http://reprap.org/wiki/RepRapPro_RepRap_Firmware" target="_blank">Help</a>&nbsp;&nbsp;&nbsp;</td>
 

      <td>&nbsp;&nbsp;&nbsp;<a href="settings.php">Settings</a>&nbsp;&nbsp;&nbsp;</td>
 
    <td>&nbsp;&nbsp;&nbsp;<a href="logout.php">Logout</a>&nbsp;&nbsp;&nbsp;</td>
      
    </tr></table>
  <br><br>'; ?>




<br><br>
<br><br>Click a file to delete it:
<br><br>

<?php print(deleteGCodeTable()); ?>

<br><br>


<script language="javascript" type="text/javascript">
   
   
function deleteFile(filetodelete)
{
	var temp = new Array();
	temp = filetodelete.split('/');
	var r=confirm("Delete the file " + temp[temp.length - 1] + " ?");
	if(r == true)
		window.location.href = "delete.php?gcode=M30%20" + filetodelete;
	else
		window.location.href = "delete.php";		
}



</script> 

</html>
