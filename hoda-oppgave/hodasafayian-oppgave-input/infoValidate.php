<table>
<?php
date_default_timezone_set('Europe/Oslo'); 
if($_POST["pck"]!=null)
{
	echo "<tr>";
	echo "<td>PCK: </td>";
	echo "<td>".$_POST["pck"]."</td>"; 
	echo "</tr>";
}
if($_POST["aim"]!=null)
{
	echo "<tr>";
	echo "<td>AIM: </td>";
	echo "<td>".$_POST["aim"]."</td>"; 
	echo "</tr>";
}
if($_POST["ak"]!=null)
{
	echo "<tr>";
	echo "<td>AK: </td>";
	echo "<td>".$_POST["ak"]."</td>"; 
	echo "</tr>";
}
if($_POST["osk"]!=null)
{
	echo "<tr>";
	echo "<td>OSK: </td>";
	echo "<td>".$_POST["osk"]."</td>"; 
	echo "</tr>";
}
if($_POST["target"]!=null)
{
	echo "<tr>";
	echo "<td>Target: </td>";
	echo "<td>".$_POST["target"]."</td>"; 
	echo "</tr>";
}
if($_POST["comment"]!=null)
{
	echo "<tr>";
	echo "<td>Comment: </td>";
	echo "<td>".$_POST["comment"]."</td>"; 
	echo "</tr>";
}
if($_POST["testStartDate"]!=null)
{
	echo "<tr>";
	echo "<td>Start date: </td>";
	echo "<td>".date("d.m.Y", $_POST["testStartDate"])."</td>"; 
	echo "</tr>";
	echo "<tr>";
	echo "<td>Start time: </td>";
	echo "<td>".date("H:i:s", $_POST["testStartDate"])."</td>"; 
	echo "</tr>";
}
if($_POST["testEndDate"]!=null && $_POST["testEndDate"]!=0)
{
	echo "<tr>";
	echo "<td>End date: </td>";
	echo "<td>".date("d.m.Y", $_POST["testEndDate"])."</td>"; 
	echo "</tr>";
	echo "<tr>";
	echo "<td>End time: </td>";
	echo "<td>".date("H:i:s", $_POST["testEndDate"])."</td>"; 
	echo "</tr>";
}
?>
</table>