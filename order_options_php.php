<html>
<?php


$con = mysqli_connect("localhost:3306","root","");
mysqli_select_db($con,"cosmetics_store");

switch($_REQUEST['button'])
{
case 'ADD ORDER':
include('add_order.html');

break;
case 'EDIT ORDER':
include('edit_order_php.php');

break;
case 'VIEW ORDER':
include('view_order_php.php');

break;
case 'DELETE ORDER':
include('delete_order1_php.php');

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