<?php
session_start();
?>
<html>

<?php
$var2=$_POST["cust_id"];
$var0=$_POST["cust_username"];
$var1=$_POST["cust_passsword"];
/*if (isset($_GET['cname']))
{
$var0=$_GET['cname'];
}
if (isset($_GET['cpswd']))
{
$var1=$_GET['cpswd'];
}*/
$con = mysqli_connect("localhost:3306","root","");
mysqli_select_db($con,"cosmetics_store");

switch($_REQUEST['button'])
{
case 'LOGIN':
$val =mysqli_query($con,"select  cust_id,cust_username,cust_password from customer where cust_id='$var2' and cust_username='$var0' and cust_password='$var1'");

if(mysqli_num_rows($val)==1)
{
$_SESSION['cust_id']=$var2;
include('customer_menu.html');
}
else
{

echo "<body style=\"background: url(invalid_cust); background-repeat: repeat; background-size:100%,100%\">";
echo "</br></br></br>";
echo "<font face=\"verdana\" color=red size='60'>INVALID ACCREDITATION</font>";
echo "</br></br></br>";
echo "<form action=\"http://localhost/cosmetics/customer_login.html\" method=POST>";

echo "<input type=\"submit\" name=\"button\" style=\"height: 50px; width: 200px\" value=\"BACK\" >";
echo "</form>";
echo "</body>";
}
break;
case 'SIGN UP':
include('new_customer_login.html');
/*$val1 =mysqli_query($con,"select * from customer_login where cust_username='$var0' and cust_password='$var1'");
if(mysqli_num_rows($val1)>=1)
{
echo "<center>";
echo "<body style=\"background: url(invalid_cust); background-repeat: repeat; background-size:90%,90%\">";
echo "</br></br></br>";
echo "<font face=\"verdana\" size=60 color=\"red\">USER ALREADY EXISTS</font>";
echo "</br></br></br>";
echo "<form action=\"http://localhost/cosmetics/customer_login.html\" method=POST>";

echo "<input type=\"submit\" name=\"button\"  value=\"back\" >";
echo "</form>";
echo "</center>";
}
else
{
$signup = "insert into customer_login values ('$var0', '$var1')";
mysqli_query($con,$signup);
echo "<center>";
echo "<body style=\"background: url(invalid_cust); background-repeat: repeat; background-size:90%,90%\">";
echo "</br></br></br>";
echo "<font face=\"verdana\" size=60 color=\"blue\">NEW USER CREATED</font>";
echo "</br></br></br>";
echo "<form action=\"http://localhost/cosmetics/customer_login.html\" method=POST>";

echo "<input type=\"submit\" name=\"button\"  value=\"back\" >";
echo "</form>";
echo "</center>";
}*/

break;
}

/*echo "</br></br></br>";
echo "<form action=\"http://localhost/customer_login.html\" method=POST>";

echo "<input type=\"submit\" name=\"button\"  value=\"back\" >";
echo "</form>";*/
?>

</html>