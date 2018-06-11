<html>
<?php

$var0=$_POST["new_cust_username"];
$var1=$_POST["new_cust_passsword"];
$con = mysqli_connect("localhost:3306","root","");
mysqli_select_db($con,"cosmetics_store");

switch($_REQUEST['button'])
{
case 'LOGIN':
$val =mysqli_query($con,"select * from new_customer_login where new_cust_username='$var0' and new_cust_password='$var1'");

if(mysqli_num_rows($val)==1)
{
include('new_customer_menu.html');
}
else
{
echo "<body style=\"background: url(invalid_cust);background-repeat: repeat; background-size:100%,100%\">";

echo "</br></br></br>";
echo "<font face=\"verdana\" color=red size='60'>INVALID ACCREDITATION</font>";
echo "</br></br></br>";
echo "<form action=\"http://localhost/cosmetics/new_customer_login.html\" method=POST>";

echo "<b><input type=\"submit\" name=\"button\" style=\"height: 50px; width: 200px\"   value=\"BACK\" ></b>";
echo "</form>";

echo "</body>";
}
break;
case 'REGISTER':
$val1 =mysqli_query($con,"select * from new_customer_login where new_cust_username='$var0' and new_cust_password='$var1'");
if(mysqli_num_rows($val1)>=1)
{
echo "<center>";
echo "<body style=\"background: url(exists.jpg);background-repeat: no-repeat; background-size:100%,90%\">";
echo "</br></br></br></br></br></br>";
echo "<font face=\"verdana\" size=\"60\" color=\"red\">USER ALREADY EXISTS</font>";
echo "</br></br></br>";
echo "</br></br></br>";
echo "</br></br></br>";
echo "</br></br></br>";
echo "<form action=\"http://localhost/cosmetics/new_customer_login.html\" method=POST>";

echo "<b><input type=\"submit\" name=\"button\" style=\"height: 50px; width: 200px\"    value=\"BACK\" ></b>";
echo "</form>";
echo "</body>";
echo "</center>";
}
else
{
$createnew = "insert into new_customer_login values ('$var0', '$var1')";
mysqli_query($con,$createnew);
echo "<center>";
echo "<body style=\"background: url(created.jpg);background-repeat: no-repeat; background-size:100%,100%\">";
echo "</br></br></br>";
echo "<font face=\"verdana\" size=\"80\" color=\"red\">NEW USER CREATED</font>";
echo "</br></br></br></br></br></br>";
echo "</br></br></br></br></br></br>";
echo "</br></br></br></br></br></br>";
echo "<form action=\"http://localhost/cosmetics/new_customer_login.html\" method=POST>";
echo "<b><input type=\"submit\" name=\"button\" style=\"height: 50px; width: 200px\"  value=\"BACK\" ></b>";
echo "</form>";
echo "</body>";
echo "</center>";
}

break;
}
?>
</html>