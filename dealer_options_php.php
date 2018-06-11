<html>
<?php


$con = mysqli_connect("localhost:3306","root","");
mysqli_select_db($con,"cosmetics_store");

switch($_REQUEST['button'])
{
case 'ADD DEALER':
include('add_dealer.html');

break;
case 'EDIT DEALER':
include('edit_dealer_php.php');

break;
case 'VIEW DEALER':
include('view_dealer_php.php');

break;
case 'DELETE DEALER':
include('delete_dealer1_php.php');

break;
case 'SUPPLY DETAILS':
include('supply_details_php.php');

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