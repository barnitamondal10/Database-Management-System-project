<html>
<?php
$con = mysqli_connect("localhost:3306","root","");
mysqli_select_db($con,"cosmetics_store");

switch($_REQUEST['button'])
{
case 'ADMINISTRATOR LOGIN':
include('admin_login.html');
break;
case 'EMPLOYEE LOGIN':
include('employee_login.html');
break;
case 'CUSTOMER LOGIN':
include('customer_login.html');
break;
case 'BACK':
include('first.html');
break;
}
?>
</html>