<html>
<head>
<style type="text/css">
h1{
font-size: 50px;
   color: navy;
}
h2 {
font-size: 25px;
   color: black; 
}
h3 {
font-size: 22px;
   color: red; 
}
body{
background-image: url(view_cp.jpg);
background-size: 100%,100%;
}

.aa{
width: 1250px;
height: 800px;
background-color: rgba(0,0,0,0.15);
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
<title>DELETE COSMETIC_PRODUCT RECORDS</title>
</head>
<?php
$con=mysqli_connect("localhost:3306","root","");
mysqli_select_db($con,"cosmetics_store");

$sql="SELECT * from cosmetic_product";
$records=mysqli_query($con,$sql);


echo "<h1 align=\"left\"><u><b>COSMETIC PRODUCT DETAILS</h1></b></u>";
echo "<table width=\"1000\" border=\"1\" align=\"center\" cellpadding=\"1\" cellspacing=\"1\" style=\"line-height:30px:\">";
 echo  "<tr>";
echo  "<th><h2>COSMETIC_PRODUCT_ID</h2></th>";
echo     "<th><h2>COSMETIC_PRODUCT_NAME</h2></th>";  
echo      "<th><h2>BRAND</h2></th>";
echo	"<th><h2>PRICE</h2></th>";
echo	"<th><h2>DESCRIPTION</h2></th>";
//echo	"<th><h2>STOCK</h2></th>";
//echo	"<th><h2>DEALER_ID</h2></th>";
echo   "</tr>";

while($row=mysqli_fetch_assoc($records))
{
echo "<tr>";
echo "<td><h3>".$row['cpid']."</h3></td>";
echo "<td><h3>".$row['cpname']."</h3></td>";
echo "<td><h3>".$row['brand']."</h3></td>";
echo "<td><h3>".$row['price']."</h3></td>";
echo "<td><h3>".$row['description']."</h3></td>";
//echo "<td><h3>".$row['stock']."</h3></td>";
//echo "<td><h3>".$row['did']."</h3></td>";
?>

<td><a href="delete_cp2_php.php?e_cpid=<?php echo $row['cpid']; ?>" alt="DELETE"><b><h3>DELETE</h3></b></a></td>

<?php
echo "</tr>";
}
echo "</table>";


echo "<form action=\"http://localhost/cosmetics/cosmetic_product_options.html\" method=POST>";
echo "</br></br></br>";
echo "<input type=\"submit\" name=\"buttond\"  value=\"BACK\">";
echo"</form>";
?>
</body>
</div>
</html>



