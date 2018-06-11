<html>
<?php


$con = mysqli_connect("localhost:3306","root","");
mysqli_select_db($con,"cosmetics_store");

switch($_REQUEST['button'])
{
case 'ADD CUSTOMER':
include('add_customer.html');

break;
case 'EDIT CUSTOMER':
include('edit_customer_php.php');

break;
case 'VIEW CUSTOMER':
include('view_customer_php.php');

break;
case 'DELETE CUSTOMER':
include('delete_customer1_php.php');

break;
case 'LOGOUT':
include('front.html');
break;

case 'BACK':
include('employee_menu.html');
break;
}
?>

</html>