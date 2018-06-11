<html>
<?php
//$var0=$_POST["aname"];
//$var1=$_POST['apswd'];
if (isset($_GET['aname']))
{
$var0=$_GET['aname'];
}
if (isset($_GET['apswd']))
{
$var1=$_GET['apswd'];
}
$con = mysqli_connect("localhost:3306","root","");
mysqli_select_db($con,"cosmetics_store");


switch($_REQUEST['button'])
{
case 'LOGIN':
$val =mysqli_query($con,"select * from admin_login where aname='$var0' and apswd='$var1'");

if(mysqli_num_rows($val)==1)
{
include('admin_menu.html');
}
else
{

echo "<body style=\"background: url(invalid_admin);background-repeat: no-repeat; background-size:90%,90%\">";

echo "</br></br></br>";
echo "<font face=\"verdana\" color=red size='60'><b>INVALID ACCREDITATION</b></font>";
echo "</body>";

echo "<form action=\"http://localhost/cosmetics/admin_login.html\">";
echo "</br></br></br>";
echo "<b><input type=\"submit\" name=\"button\" style=\"height: 50px; width: 200px\"    value=\"BACK\"></b?";
echo"</form>";
}
break;

}

?>

</html>