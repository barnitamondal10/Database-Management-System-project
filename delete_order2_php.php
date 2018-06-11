<html>
<?php
$con=mysqli_connect("localhost:3306","root","");
mysqli_select_db($con,"cosmetics_store");

if (isset($_GET['e_or_id']))
{
	$sql="delete from orders where or_id='$_GET[e_or_id]'";
	$result=mysqli_query($con,$sql); 
	echo "<font face=\"verdana\" size=10 color=\"blue\">";
	echo "<center>";
	echo "ORDER WITH ORDER_ID   ".$_GET['e_or_id']."  DELETED SUCCESSFULLY........";
	echo "</center>";
	if(!isset($sql))
	{
	   die("FAILED".mysqli_error());
	}
	else
	{
	   header("refresh:3;url=delete_order1_php.php");
	}
}

?>
