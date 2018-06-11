<html>
<?php
$con = mysqli_connect("localhost:3306","root","");
mysqli_select_db($con,"cosmetics_store");

switch($_REQUEST['button'])
{
case 'LOGIN':
include('front.html');
break;
case 'LOGO':
include('logo.html');
break;
}
?>
</html>