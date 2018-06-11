<html>
<?php

$cust_id=$_POST["cust_id"];
$cust_name=$_POST["cust_name"];
$gender=$_POST["gender"];
$address=$_POST["address"];
$phone_no=$_POST["phone_no"];
$email=$_POST["email"];
$review=$_POST["review"];
$eid=$_POST["eid"];

$cust_username=$_POST["cust_username"];
$cust_password=$_POST["cust_password"];

$con = mysqli_connect("localhost:3306","root","");
mysqli_select_db($con,"cosmetics_store");

switch($_REQUEST['button'])
{
case 'SUBMIT':
$val1=mysqli_query($con,"select * from customer where cust_id='$cust_id'");
$val2=mysqli_query($con,"select * from employee where eid='$eid'");

if((mysqli_num_rows($val1)==0)and(mysqli_num_rows($val2)==1))
{
echo "</br></br></br></br></br></br>";
echo "<center>";
$var=mysqli_query($con,"insert into customer values('$cust_id','$cust_name','$gender','$address','$phone_no','$email','$review','$eid','$cust_username','$cust_password')");
//$var1=mysqli_query($con,"insert into customer_login values('$cust_username','$cust_password')");
echo "<body style=\"background: url(emp_inserted);background-repeat: no-repeat; background-size:100%,100%\">";

echo "</br>";
echo "<font face=\"verdana\" color=blue size='60'><b>INSERTED SUCCESSFULY</b></font>";
echo "</br></br></br></br></br></br>";
echo "</center>";
}
else
{
  if((mysqli_num_rows($val1)>0)and(mysqli_num_rows($val2)==1))
  {

  echo "</br></br><br></br>";
  echo "<center>";
  //echo "<font color=\"red\">-----ERROR-----</font>";
echo "<body style=\"background: url(error.gif);background-repeat: repeat; background-size:70%,100%\">";  
echo "</br></br></br>";
  echo "<font face=\"verdana\" color=red size='60'>CUSTOMER WITH THE GIVEN CUSTOMER_ID   ".$cust_id."   EXISTS</b></font>";
  echo "</center>";
  }
  if((mysqli_num_rows($val1)>0)and(mysqli_num_rows($val2)==0))
  {

  echo "</br></br><br></br>";
  echo "<center>";
  //echo "<font color=\"red\">-----ERROR-----</font>";
echo "<body style=\"background: url(error.gif);background-repeat: repeat; background-size:70%,100%\">";  
echo "</br></br></br>";
  echo "<font face=\"verdana\" color=red size='60'><b>CUSTOMER WITH THE GIVEN CUSTOMER_ID   ".$cust_id."   EXISTS AND EMPLOYEE WITH THE GIVEN EMPLOYEE_ID   ".$eid."   DOES NOT EXISTS</b></font>";
  echo "</center>";
  }
  if((mysqli_num_rows($val1)==0)and(mysqli_num_rows($val2)==0))
  {

  echo "</br></br><br></br>";
  echo "<center>";
 // echo "<font color=\"red\">-----ERROR-----</font>";
echo "<body style=\"background: url(error.gif);background-repeat: repeat; background-size:70%,100%\">";  
echo "</br></br></br>";
  echo "<font face=\"verdana\" color=red size='60'><b>EMPLOYEE WITH THE GIVEN EMPLOYEE_ID   ".$eid."   DOES NOT EXISTS</b></font>";
  echo "</center>";
  }
}
echo "<form action=\"http://localhost/cosmetics/add_customer.html\" method=POST>";
echo "</br></br></br>";
echo "<b><input type=\"submit\" name=\"button\" style=\"height: 50px; width: 200px\" value=\"BACK\"></b>";
echo"</form>";
break;

case 'BACK':
include('customer_options.html');
break;

case 'LOGOUT':
include('front.html');
break;
}
?>
</html>