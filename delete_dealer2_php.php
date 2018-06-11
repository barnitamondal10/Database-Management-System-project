<html>
<?php
$con=mysqli_connect("localhost:3306","root","");
mysqli_select_db($con,"cosmetics_store");

if (isset($_GET['e_did']))
{
	$sql="delete from dealer where did='$_GET[e_did]'";
	$result=mysqli_query($con,$sql); 
	echo "<font face=\"verdana\" size=8 color=\"blue\">";
	echo "<center>";
echo "<body style=\"background: url(deleted.jpg);background-repeat: repeat; background-size:80%,90%\">";

	echo "DEALER WITH DEALER_ID   ".$_GET['e_did']."  DELETED SUCCESSFULLY........";
	echo "</center>";
	if(!isset($sql))
	{
	   die("FAILED".mysqli_error());
	}
	else
	{
	   header("refresh:5;url=delete_dealer1_php.php");
	}
}

?>
