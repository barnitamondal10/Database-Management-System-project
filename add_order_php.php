<html>
<?php

$or_id=$_POST["or_id"];
$or_date=$_POST["or_date"];
$quantity=$_POST["quantity"];
$total_price=$_POST["total_price"];
$ptype=$_POST["ptype"];
$cust_id=$_POST["cust_id"];
$cpid=$_POST["cpid"];

$con = mysqli_connect("localhost:3306","root","");
mysqli_select_db($con,"cosmetics_store");

switch($_REQUEST['button'])
{
case 'SUBMIT':
$val0=mysqli_query($con,"select * from orders where or_id='$or_id'");
$val1=mysqli_query($con,"select * from customer where cust_id='$cust_id'");
$val2=mysqli_query($con,"select * from cosmetic_product where cpid='$cpid'");

if((mysqli_num_rows($val0)==0)and(mysqli_num_rows($val1)==1) and (mysqli_num_rows($val2)==1))
{
echo "</br></br></br></br></br></br>";
echo "<center>";
$var=mysqli_query($con,"insert into orders values('$or_id','$or_date','$quantity','$total_price','$ptype','$cust_id','$cpid')");
$var1=mysqli_query($con,"update orders a inner join cosmetic_product b on a.cpid=b.cpid set a.total_price=a.quantity * b.price");
echo "<body style=\"background: url(emp_inserted);background-repeat: no-repeat; background-size:100%,100%\">";

echo "</br>";
echo "<font face=\"verdana\" color=blue size='60'><b>INSERTED SUCCESSFULY</b></font>";
echo "</br></br></br></br></br></br>";
echo "</center>";
}
else
{
  echo "</br></br></br></br></br></br>";
  echo "<center>";
echo "<body style=\"background: url(error.gif);background-repeat: repeat; background-size:70%,100%\">";

  echo "<font face=\"verdana\" color=red size='60'><b>UNSUCCESSFUL INSERTION</b></font>";
  echo "</br></br></br></br></br></br>";
  echo "</center>";
} 




  /*if((mysqli_num_rows($val0)>0)and(mysqli_num_rows($val1)==1)and(mysqli_num_rows($val2)==1))
  {

  echo "</br></br><br></br></br><br>";
  echo "<center>";
  echo "<font color=\"red\">-----ERROR-----</font>";
  echo "</br></br></br></br></br></br>";
  echo "ORDER WITH THE GiVEN ORDER_ID ".$or_id." EXISTS";
  echo "</center>";
  }
  if((mysqli_num_rows($val1)>0)and(mysqli_num_rows($val2)==0))
  {

  echo "</br></br><br></br></br><br>";
  echo "<center>";
  echo "<font color=\"red\">-----ERROR-----</font>";
  echo "</br></br></br></br></br></br>";
  echo "CUSTOMER WITH THE GIVEN CUSTOMER_ID ".$cust_id." EXISTS AND EMPLOYEE WITH THE GIVEN EMPLOYEE_ID ".$eid." DOES NOT EXISTS";
  echo "</center>";
  }
  if((mysqli_num_rows($val1)==0)and(mysqli_num_rows($val2)==0))
  {

  echo "</br></br><br></br></br><br>";
  echo "<center>";
  echo "<font color=\"red\">-----ERROR-----</font>";
  echo "</br></br></br></br></br></br>";
  echo "EMPLOYEE WITH THE GIVEN EMPLOYEE_ID ".$eid." DOES NOT EXISTS";
  echo "</center>";
  }*/





echo "<form action=\"http://localhost/cosmetics/add_order.html\" method=POST>";
echo "</br></br></br>";
echo "<b><input type=\"submit\" name=\"button\" style=\"height: 50px; width: 200px\" value=\"BACK\"></b>";
echo"</form>";
break;

case 'BACK':
include('order_options.html');
break;

case 'LOGOUT':
include('front.html');
break;
}
?>
</html>