<html>
<?php
$con=mysqli_connect("localhost:3306","root","");
mysqli_select_db($con,"cosmetics_store");

if (isset($_GET['e_cust_id']))
{
	$sql="delete from customer where cust_id='$_GET[e_cust_id]'";
	$result=mysqli_query($con,$sql); 
	echo "<font face=\"verdana\" size=8 color=\"blue\">";
	echo "<center>";
echo "<body style=\"background: url(deleted.jpg);background-repeat: repeat; background-size:80%,90%\">";
	echo "CUSTOMER WITH CUSTOMER_ID   ".$_GET['e_cust_id']."  DELETED SUCCESSFULLY........";
	echo "</center>";
	if(!isset($sql))
	{
	   die("FAILED".mysqli_error());
	}
	else
	{
	   header("refresh:4;url=delete_customer1_php.php");
	}
}

?>
