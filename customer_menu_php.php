<html>
<?php
session_start();
$cust=$_SESSION['cust_id'];

$con = mysqli_connect("localhost:3306","root","");
mysqli_select_db($con,"cosmetics_store");

switch($_REQUEST['button'])
{


case 'VIEW COSMETIC PRODUCTS':
include('view_cosmetic_products_php_cust.php');

break;
case 'VIEW ORDERS':
include('view_order_php_cust.php');

break;
case 'LOGOUT':
include('last.html');
break;
}
?>

</html>