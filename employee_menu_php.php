<html>
<?php


$con = mysqli_connect("localhost:3306","root","");
mysqli_select_db($con,"cosmetics_store");

switch($_REQUEST['button'])
{
case 'CUSTOMER':
include('customer_options.html');

break;
case 'ORDERS':
include('order_options.html');
break;

case 'VIEW DEALERS':
include('view_dealer_php_emp.php');
break;

case 'VIEW COSMETIC PRODUCTS':
include('view_cosmetic_products_php_emp.php');

break;
case 'logout':
include('front.html');
break;
}
?>

</html>