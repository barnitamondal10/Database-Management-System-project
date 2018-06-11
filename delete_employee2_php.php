<html>
<?php
$con=mysqli_connect("localhost:3306","root","");
mysqli_select_db($con,"cosmetics_store");

if (isset($_GET['e_eid']))
{
	$sql="delete from employee where eid='$_GET[e_eid]'";
	$result=mysqli_query($con,$sql); 
	echo "<font face=\"verdana\" size=8 color=\"blue\">";
	echo "<center>";
echo "<body style=\"background: url(deleted.jpg);background-repeat: repeat; background-size:80%,90%\">";

	echo "EMPLOYEE WITH EMPLOYEE_ID   ".$_GET['e_eid']."   DELETED SUCCESSFULLY........";
	echo "</center>";
	if(!isset($sql))
	{
	   die("FAILED".mysqli_error());
	}
	else
	{
	   header("refresh:5;url=delete_employee1_php.php");
	}
}

?>
