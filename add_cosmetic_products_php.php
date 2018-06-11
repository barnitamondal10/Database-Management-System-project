<html>
<?php

$cpid=$_POST["cpid"];
$cpname=$_POST["cpname"];
$brand=$_POST["brand"];
$price=$_POST["price"];
$description=$_POST["description"];
//$stock=$_POST["stock"];
//$did=$_POST["did"];
$con = mysqli_connect("localhost:3306","root","");
mysqli_select_db($con,"cosmetics_store");

switch($_REQUEST['button'])
{
case 'SUBMIT':
$val1=mysqli_query($con,"select * from cosmetic_product where cpid='$cpid'");
//$val2=mysqli_query($con,"select * from dealer where did='$did'");

if((mysqli_num_rows($val1)==0))
{
echo "</br></br></br></br></br></br>";
echo "<center>";
$var=mysqli_query($con,"insert into cosmetic_product values('$cpid','$cpname','$brand','$price','$description')");
echo "<body style=\"background: url(emp_inserted);background-repeat: no-repeat; background-size:100%,100%\">";

echo "</br>";
echo "<font face=\"verdana\" color=blue size='60'><b>INSERTED SUCCESSFULY</b></font>";
echo "</br></br></br></br></br></br>";
echo "</center>";
}
else
{
  //if((mysqli_num_rows($val1)>0)and(mysqli_num_rows($val2)==1))
  

  echo "</br></br><br></br></br><br>";
  echo "<center>";
  //echo "<font color=\"red\">-----ERROR-----</font>";
echo "<body style=\"background: url(error.gif);background-repeat: repeat; background-size:70%,100%\">";

  echo "</br></br></br>";
  echo "<font face=\"verdana\" color=red size='60'><b>COSMETIC_PRODUCT WITH THE GiVEN COSMETIC_PRODUCT_ID ".$cpid." EXISTS</b></font>";
  echo "</center>";
}
  /*if((mysqli_num_rows($val1)>0)and(mysqli_num_rows($val2)==0))
  {

  echo "</br></br><br></br></br><br>";
  echo "<center>";
 // echo "<font color=\"red\">-----ERROR-----</font>";
echo "<body style=\"background: url(error.gif);background-repeat: repeat; background-size:70%,100%\">";
  
echo "</br></br></br>";
  echo "<font face=\"verdana\" color=red size='60'><b>COSMETIC_PRODUCT WITH THE GIVEN COSMETIC_PRODUCT_ID ".$cpid." EXISTS AND DEALER WITH THE GIVEN DEALER_ID ".$did." DOES NOT EXISTS</b></font>";
  echo "</center>";
  }
  if((mysqli_num_rows($val1)==0)and(mysqli_num_rows($val2)==0))
  {

  echo "</br></br><br></br></br><br>";
  echo "<center>";
  //echo "<font color=\"red\">-----ERROR-----</font>";
echo "<body style=\"background: url(error.gif);background-repeat: repeat; background-size:70%,100%\">";
  
echo "</br></br></br>";
  echo "<font face=\"verdana\" color=red size='60'><b>DEALER WITH THE GIVEN DEALER_ID ".$did." DOES NOT EXISTS</b></font>";
  echo "</center>";
  }
}*/
echo "<form action=\"http://localhost/cosmetics/add_cosmetic_products.html\" method=POST>";
echo "</br></br></br>";
echo "<b><input type=\"submit\" name=\"button\" style=\"height: 50px; width: 200px\" value=\"BACK\"></b>";
echo"</form>";
break;

case 'BACK':
include('cosmetic_product_options.html');
break;

case 'LOGOUT':
include('front.html');
break;
}
?>
</html>