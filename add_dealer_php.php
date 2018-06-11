<html>
<?php

$did=$_POST["did"];
$dname=$_POST["dname"];
$gender=$_POST["gender"];
$address=$_POST["address"];
$phone_no=$_POST["phone_no"];
$email=$_POST["email"];
$con = mysqli_connect("localhost:3306","root","");
mysqli_select_db($con,"cosmetics_store");

switch($_REQUEST['button'])
{
case 'SUBMIT':
$var=mysqli_query($con,"select * from dealer where did='$did'");
if(mysqli_num_rows($var)==0)
{
echo "</br></br></br></br></br></br>";
echo "<center>";
$val=mysqli_query($con,"insert into dealer values('$did','$dname','$gender','$address','$phone_no','$email')");
echo "<body style=\"background: url(emp_inserted);background-repeat: no-repeat; background-size:100%,100%\">";

echo "</br>";
echo "<font face=\"verdana\" color=blue size='60'><b>INSERTED SUCCESSFULY</b></font>";
echo "</br></br></br></br></br></br>";
echo "</center>";
}
else
{
 echo "</br></br><br></br>";
  echo "<center>";
  //echo "<font color=\"red\">-----ERROR-----</font>";
echo "<body style=\"background: url(error.gif);background-repeat: repeat; background-size:70%,100%\">";

echo "</br>";   
echo "</br></br>";
  echo "<font face=\"verdana\" color=red size='60'><b>DEALER WITH THE GIVEN DEALER_ID   ".$did."   EXISTS</b></font>";
  echo "</center>";
 }


echo "<form action=\"http://localhost/cosmetics/add_dealer.html\" method=POST>";
echo "</br></br></br></br>";
echo "<b><input type=\"submit\" name=\"button\" style=\"height: 50px; width: 200px\"  value=\"BACK\"></b>";
echo"</form>";
break;

case 'BACK':
include('dealer_options.html');
break;

case 'LOGOUT':
include('front.html');
break;
}
?>
</html>