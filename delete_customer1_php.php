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
   color: seashell; 
}
body{
background-image: url(edit_customer.jpg);
background-size: 100%,100%;
}

.aa{
width: 2000px;
height: 1000px;
background-color: rgba(0,0,0,0.3);
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
<head>
<title>DELETE CUSTOMER RECORDS</title>
</head>
<?php
$con=mysqli_connect("localhost:3306","root","");
mysqli_select_db($con,"cosmetics_store");

$sql="SELECT * from customer";
$records=mysqli_query($con,$sql);

echo "<h1 align=\"left\"><u><b>CUSTOMER DETAILS</h1></b></u>";
echo "<table width=\"1000\" border=\"1\" align=\"center\" cellpadding=\"1\" cellspacing=\"1\" style=\"line-height:30px:\">";
 echo  "<tr>";

echo "<th><h2>CUSTOMER_ID</h2></th>";
echo "<th><h2>CUSTOMER_NAME</h2></th>";
echo "<th><h2>GENDER</h2></th>";
echo "<th><h2>ADDRESS</h2></th>";
echo "<th><h2>PHONE_NO</h2></th>";
echo "<th><h2>EMAIL</h2></th>";
echo "<th><h2>REVIEW</h2></th>";
echo "<th><h2>EMPLOYEE_ID</h2></th>";
echo "<th><h2>CUSTOMER_USERNAME</h2></th>";
echo "<th><h2>CUSTOMER_PASSWORD</h2></th>";
echo   "</tr>";


while($row=mysqli_fetch_assoc($records))
{
echo "<tr>";
echo "<td><h3>".$row['cust_id']."</h3></td>";
echo "<td><h3>".$row['cust_name']."</h3></td>";
echo "<td><h3>".$row['gender']."</h3></td>";
echo "<td><h3>".$row['address']."</h3></td>";
echo "<td><h3>".$row['phone_no']."</h3></td>";
echo "<td><h3>".$row['email']."</h3></td>";
echo "<td><h3>".$row['review']."</h3></td>";
echo "<td><h3>".$row['eid']."</h3></td>";
echo "<td><h3>".$row['cust_username']."</h3></td>";
echo "<td><h3>".$row['cust_password']."</h3></td>";

?>

<td><a href="delete_customer2_php.php?e_cust_id=<?php echo $row['cust_id']; ?>" alt="DELETE"><b><h3>DELETE</h3></b></a></td>

<?php
echo "</tr>";
}
echo "</table>";


echo "<form action=\"http://localhost/cosmetics/customer_options.html\" method=POST>";
echo "</br></br></br>";
echo "<input type=\"submit\" name=\"buttond\"  value=\"BACK\">";
echo"</form>";
?>
</body>
</div>
</html>



