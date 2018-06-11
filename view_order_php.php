<?php
$con=mysqli_connect("localhost:3306","root","");
mysqli_select_db($con,"cosmetics_store");


$query="select * from orders";
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
font-size: 22px;
   color: white; 
}
body{
background-image: url(view_order.jpg);
background-size: 100%,100%;
}

.aa{
width: 1400px;
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

<h1 align="left"><u><b>ORDER DETAILS</h1></b></u>
<table width="800" border="1" cellpadding="1" cellspacing="1">
<tr>
 	<th><h2>ORDER_ID</h2></th>
	<th><h2>ORDER_DATE</h2></th> 
	<th><h2>QUANTITY</h2></th>
	<th><h2>TOTAL_PRICE</h2></th>
	<th><h2>PAYMENT_TYPE</h2></th>
	<th><h2>CUSTOMER_ID</h2></th>
	<th><h2>COSMETIC_PRODUCT_ID</h2></th>
   </tr>
<?php

while($row=mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td><h3>".$row['or_id']."</h3></td>";
echo "<td><h3>".$row['or_date']."</h3></td>";
echo "<td><h3>".$row['quantity']."</h3></td>";
echo "<td><h3>".$row['total_price']."</h3></td>";
echo "<td><h3>".$row['ptype']."</h3></td>";
echo "<td><h3>".$row['cust_id']."</h3></td>";
echo "<td><h3>".$row['cpid']."</h3></td>";

echo "</tr>";
}
echo "</table>";
echo "<form action=\"http://localhost/cosmetics/order_options.html\" method=POST>";
echo "</br></br></br>";
echo "<b><input type=\"submit\" name=\"button\" style=\"height: 50px; width: 170px\" value=\"BACK\"></b></td>";
echo "</form>";
?>
</table>
</body>
</html>