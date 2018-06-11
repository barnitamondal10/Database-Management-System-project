<html>
<?php


$con = mysqli_connect("localhost:3306","root","");
mysqli_select_db($con,"cosmetics_store");

switch($_REQUEST['button'])
{
case 'ADD EMPLOYEE':
include('add_employee.html');

break;
case 'EDIT EMPLOYEE':
include('edit_employee_php.php');

break;
case 'DELETE EMPLOYEE':
include('delete_employee1_php.php');

break;
case 'VIEW EMPLOYEE':
include('view_employee_php.php');

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