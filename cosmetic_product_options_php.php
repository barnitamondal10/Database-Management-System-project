<html>
<?php


$con = mysqli_connect("localhost:3306","root","");
mysqli_select_db($con,"cosmetics_store");

switch($_REQUEST['button'])
{
case 'ADD COSMETIC_PRODUCT':
include('add_cosmetic_products.html');

break;
case 'EDIT COSMETIC_PRODUCT':
include('edit_cosmetic_products_php.php');

break;
case 'VIEW COSMETIC_PRODUCT':
include('view_cosmetic_products_php.php');

break;
case 'DELETE COSMETIC_PRODUCT':
include('delete_cp1_php.php');

break;
case 'LOGOUT':
include('front.html');
break;
case 'BACK':
include('admin_menu.html');
break;
}
?>

</html>