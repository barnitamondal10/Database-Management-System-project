<?php
$con=mysqli_connect("localhost:3306","root","");
mysqli_select_db($con,"cosmetics_store");


$query="select * from supply";
$result=mysqli_query($con,$query);
?>

<html>
<head>
<style type="text/css">
h1{
font-size: 50px;
   color: cyan;
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
background-image: url(delete_dealer.jpg);
background-size: 100%,100%;
}

.aa{
width: 900px;
height: 900px;
background-color: rgba(0,0,0,0.45);
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
//font-weight: bolder;
font-size: 17px;
}

</style>
</head>
<body>
<div class="aa">

<h1 align="left"><u><b>SUPPLY DETAILS</h1></b></u>
<table width="900" border="1" align="center" cellpadding="1" cellspacing="1" line-height:30px:>
<tr>
	<th><h2>DEALER_ID</h2></th>
     <th><h2>COSMETIC_PRODUCT_ID</h2></th>  
      <th><h2>UNITS_SUPPLIED</h2></th>
   </tr>
<?php

while($row=mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td><h3>".$row['did']."</h3></td>";
echo "<td><h3>".$row['cpid']."</h3></td>";
echo "<td><h3>".$row['units_supplied']."</h3></td>";
echo "</tr>";
}
echo "</table>";
echo "<form action=\"http://localhost/cosmetics/dealer_options.html\" method=POST>";
echo "</br></br></br>";
echo "<b><input type=\"submit\" name=\"button\" style=\"height: 50px; width: 170px\" value=\"BACK\"></b></td>";
echo "</form>";
?>

</div>
</body>
</html>