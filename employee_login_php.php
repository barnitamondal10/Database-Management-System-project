<html>
<?php
$var2=$_POST["eid"];
$var0=$_POST["emp_username"];
$var1=$_POST["emp_password"];
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
$val =mysqli_query($con,"select eid,emp_username,emp_password from employee where eid='$var2' and emp_username='$var0' and emp_password='$var1'");

if(mysqli_num_rows($val)==1)
{
include('employee_menu.html');
}
else
{
echo "<body style=\"background: url(invalid_emp);background-repeat: repeat; background-size:90%,90%\">";

echo "</br></br></br>";
echo "<font face=\"verdana\" color=red size='60'><b>INVALID ACCREDITATION</b></font>";
echo "</br></br></br>";
echo "<form action=\"http://localhost/cosmetics/employee_login.html\" method=POST>";

echo "<input type=\"submit\" name=\"button\" style=\"height: 50px; width: 200px\" value=\"BACK\" >";
echo "</form>";
echo "</body>";
}
break;
/*case 'SIGN UP':
$val1 =mysqli_query($con,"select * from employee_login where ename='$var0' and epswd='$var1'");
if(mysqli_num_rows($val1)>=1)
{
echo "<center>";
echo "</br></br></br></br></br></br></br></br></br>";
echo "<font size=15\" color=\"red\">USER ALREADY EXISTS</font>";
echo "</br></br></br>";
echo "<form action=\"http://localhost/cosmetics/employee_login.html\" method=POST>";

echo "<input type=\"submit\" name=\"button\"  value=\"back\" >";
echo "</form>";
echo "</center>";
}
else
{
$signup = "insert into employee_login values ('$var0', '$var1')";
mysqli_query($con,$signup);
echo "<center>";
echo "</br></br></br></br></br></br></br></br></br>";
echo "<font size=15\" color=\"red\">NEW USER CREATED</font>";
echo "</br></br></br>";
echo "<form action=\"http://localhost/cosmetics/employee_login.html\" method=POST>";

echo "<input type=\"submit\" name=\"button\"  value=\"BACK\" >";
echo "</form>";
echo "</center>";
}*/
break;
}

/*echo "</br></br></br>";
echo "<form action=\"http://localhost/customer_login.html\" method=POST>";

echo "<b><input type=\"submit\" name=\"button\" style=\"height: 50px; width: 200px\"  value=\"BACK\" ></b>";
echo "</form>";*/
?>

</html>