<html>
<?php


$con = mysqli_connect("localhost:3306","root","");
mysqli_select_db($con,"cosmetics_store");

switch($_REQUEST['button'])
{
case 'EMPLOYEE':
include('employee_options.html');

break;
case 'DEALER':
include('dealer_options.html');

break;
case 'COSMETIC PRODUCTS':
include('cosmetic_product_options.html');

break;

}
?>

</html>