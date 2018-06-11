<?php
$con=mysqli_connect("localhost:3306","root","");
mysqli_select_db($con,"cosmetics_store");



$query="select * from employee";
$result=mysqli_query($con,$query);

?>

<html>
<head>
<style type="text/css">
h1{
font-size: 50px;
   color: red;
}
h2 {
font-size: 25px;
   color: yellow; 
}
h3 {
font-size: 20px;
   color: white; 
}
body{
background-image: url(view_employee.jpg);
background-size: 100%,100%;
}

.aa{
width: 2800px;
height: 1000px;
background-color: rgba(0,0,0,0.4);
margin:0 auto;
margin-top: 30px;
padding-top: 15px;
padding-left: 50px;
border-radius: 20px;
font-weight: bolder;
font-size: 18px;
box-shadow: inset 0 50px rgba(255,255,255,0.2),
	    inset 0 -15px 30px rgba(0,0,0,0.4),
		  0 5px 10px rgba(0,0,0,0.5);
}
.aa input[type="text"]{
width: 200px;
height: 30px;
border: 0;
border-radius: 5px;
padding-left: 15px;
}
.aa input[type="password"]{
width: 200px;
height: 30px;
border: 0;
border-radius: 5px;
padding-left: 15px;
}
.aa input[type="submit"]{
width: 120px;
height: 35px;
border: 0;
border-radius: 5px;
background-color: yellow;
font-weight: bolder;
font-size: 17px;
}

</style>
</head>
<body>
<div class="aa">

<h1 align="left"><u><b>EMPLOYEE DETAILS</h1></b></u>
<table width="1500" border="1" cellpadding="1" cellspacing="1">
<tr>
	<th><h2>EMPLOYEE_ID</h2></th>
     <th><h2>EMPLOYEE_NAME</h2></th>  
      <th><h2>GENDER</h2></th>
	<th><h2>ADDRESS</h2></th>
	<th><h2>PHONE_NO</h2></th>
	<th><h2>DOB</h2></th>
	<th><h2>QUALIFICATION</h2></th>
	<th><h2>APPOINTED_POST</h2></th>
	<th><h2>DUTY_TIME</h2></th>
	<th><h2>DATE_OF_APPOINTMENT</h2></th>
	<th><h2>GROSS_SALARY</h2></th>
<th><h2>NET_SALARY</h2></th>
	<th><h2>EMPLOYEE_USERNAME</h2></th>
	<th><h2>EMPLOYEE_PASSWORD</h2></th>
   </tr>
<?php

while($row=mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td><h3>".$row['eid']."</h3></td>";
echo "<td><h3>".$row['ename']."</h3></td>";
echo "<td><h3>".$row['gender']."</h3></td>";
echo "<td><h3>".$row['address']."</h3></td>";
echo "<td><h3>".$row['phone_no']."</h3></td>";
echo "<td><h3>".$row['dob']."</h3></td>";
echo "<td><h3>".$row['quali']."</h3></td>";
echo "<td><h3>".$row['apost']."</h3></td>";
echo "<td><h3>".$row['dutytime']."</h3></td>";
echo "<td><h3>".$row['dappoint']."</h3></td>";
echo "<td><h3>".$row['salary']."</h3></td>";
echo "<td><h3>".$row['salary_tax']."</h3></td>";
echo "<td><h3>".$row['emp_username']."</h3></td>";
echo "<td><h3>".$row['emp_password']."</h3></td>";
echo "</tr>";
}

echo "</table>";
echo "<form action=\"http://localhost/cosmetics/employee_options.html\" method=POST>";
echo "</br></br></br>";
echo "<b><input type=\"submit\" name=\"button\" style=\"height: 50px; width: 170px\" value=\"BACK\"></b></td>";
echo "</form>";
?>

</div>
</body>
</html>