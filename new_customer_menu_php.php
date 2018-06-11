<html>
<?php


$con = mysqli_connect("localhost:3306","root","");
mysqli_select_db($con,"cosmetics_store");

switch($_REQUEST['button'])
{


case 'VIEW COSMETIC PRODUCTS':
include('view_cosmetic_products_php_new_cust.php');

break;

case 'logout':
include('front.html');
break;
}
?>

</html>