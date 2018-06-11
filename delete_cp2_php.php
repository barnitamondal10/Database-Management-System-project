<html>
<?php
$con=mysqli_connect("localhost:3306","root","");
mysqli_select_db($con,"cosmetics_store");

if (isset($_GET['e_cpid']))
{
	$sql="delete from cosmetic_product where cpid='$_GET[e_cpid]'";
	$result=mysqli_query($con,$sql); 
	echo "<font face=\"verdana\" size=10 color=\"blue\">";
	echo "<center>";
echo "<body style=\"background: url(deleted.jpg);background-repeat: repeat; background-size:80%,90%\">";

	echo "COSMETIC PRODUCT WITH COSMETIC_PRODUCT_ID   ".$_GET['e_cpid']."  DELETED SUCCESSFULLY........";
	echo "</center>";
	if(!isset($sql))
	{
	   die("FAILED".mysqli_error());
	}
	else
	{
	   header("refresh:3;url=delete_cp1_php.php");
	}
}

?>
