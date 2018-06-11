<html>
<?php

$eid=$_POST["eid"];
$ename=$_POST["ename"];
$gender=$_POST["gender"];
$address=$_POST["address"];
$phone_no=$_POST["phone_no"];
$dob=$_POST["dob"];

$var1=$_POST["quali"];
/*if (isset($_GET['quali']))
{
$var1=$_GET['quali'];
}*/
$apost=$_POST["apost"];
$dutytime=$_POST["dutytime"];
$dappoint=$_POST["dappoint"];
$salary=$_POST["salary"];
$salary_tax=$_POST["salary_tax"];
$emp_username=$_POST["emp_username"];
$emp_password=$_POST["emp_password"];

$con = mysqli_connect("localhost:3306","root","");
mysqli_select_db($con,"cosmetics_store");

switch($_REQUEST['button'])
{
case 'SUBMIT':
$var=mysqli_query($con,"select * from employee where eid='$eid'");
if(mysqli_num_rows($var)==0)
{
echo "</br></br></br></br></br></br>";
echo "<center>";
$val=mysqli_query($con,"insert into employee values('$eid','$ename','$gender','$address','$phone_no','$dob','$var1','$apost','$dutytime','$dappoint','$salary','$salary_tax','$emp_username','$emp_password')");
//$val1=mysqli_query($con,"insert into employee_login values('$emp_username','$emp_password')");

echo "<body style=\"background: url(emp_inserted);background-repeat: no-repeat; background-size:100%,100%\">";

echo "</br>";
echo "<font face=\"verdana\" color=blue size='60'><b>INSERTED SUCCESSFULY</b></font>";
echo "</br></br></br></br></br></br>";
echo "</center>";
}
else
{
 echo "</br></br><br></br></br><br>";
  echo "<center>";
  //echo "<font color=\"red\">-----ERROR-----</font>";
echo "<body style=\"background: url(error.gif);background-repeat: repeat; background-size:70%,100%\">";

echo "</br>"; 
 echo "</br></br></br>";
  echo "<font face=\"verdana\" color=red size='60'><b>EMPLOYEE WITH THE GIVEN EMPLOYEE_ID ".$eid." EXISTS</b></font>";
  echo "</center>";
 }


echo "<form action=\"http://localhost/cosmetics/add_employee.html\" method=POST>";
echo "</br></br></br>";
echo "<b><input type=\"submit\" name=\"button\" style=\"height: 50px; width: 200px\"  value=\"BACK\"></b>";
echo"</form>";
break;

case 'BACK':
include('employee_options.html');
break;

case 'LOGOUT':
include('front.html');
break;
}
?>
</html>