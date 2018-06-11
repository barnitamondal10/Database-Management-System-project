<?php
$con=mysqli_connect("localhost:3306","root","");
mysqli_select_db($con,"cosmetics_store");

if (isset($_GET['e_cpid']))
{
	$sql="select * from cosmetic_product where cpid='$_GET[e_cpid]'";
	$result=mysqli_query($con,$sql);
	$row=mysqli_fetch_array($result);
}
if (isset($_POST['b_update']))
{
	$upd="UPDATE cosmetic_product SET cpname='$_POST[cpname]',brand='$_POST[brand]',description='$_POST[description]',price='$_POST[price]' where cpid='$_GET[e_cpid]'";
	$up=mysqli_query($con,$upd);
	if(!isset($sql))
	{
	   die("ERROR $sql".mysqli_connect_error());
	}
	else
	{
	   header("refresh:5;url=edit_cosmetic_products_php.php");
	}
}
?>
<!doctype html>
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

.aa{
width: 840px;
height: 520px;
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
.aa button[type="button"]{
width: 140px;
height: 35px;
border: 0;
border-radius: 5px;
background-color: skyblue;
//font-weight: bolder;
font-size: 17px;
}
.aa button[type="submit"]{
width: 120px;
height: 35px;
border: 0;
border-radius: 5px;
background-color: skyblue;
font-weight: bolder;
font-size: 17px;
}
.aa input[type="submit"]{
width: 120px;
height: 35px;
border: 0;
border-radius: 5px;
background-color: skyblue;
font-weight: bolder;
font-size: 17px;
}

</style>
</head>
<body>
<div class="aa">

<body style="background-image: url(update_cp.jpg); background-size: 100%,100%; background-repeat: no-repeat">
<center>
<form method="POST">

<h1><u>EDIT COSMETIC PRODUCT RECORDS</h1></u>


<h2>COSMETIC_ID:   <input type="text" name="cpid" value="<?php if(!empty($row['cpid'])) { echo $row['cpid']; } ?> "></h2>

<h2>COSMETIC_NAME:   <input type="text" name="cpname" value="<?php if(!empty($row['cpname'])) { echo $row['cpname']; } ?> "></h2>


<h2>BRAND:   <select name="brand">
<option disabled selected value>--SELECT AN OPTION--</option>
<option
value="LAKME"
<?php
if(!empty($row['brand']))
 {
if($row["brand"]=='LAKME')
{
	echo "selected";
}
}
?>
>LAKME</option>

<option
value="REVLON"
<?php
if(!empty($row['brand']))
 {
if($row["brand"]=='REVLON')
{
	echo "selected";
}
}
?>
>REVLON</option>

<option
value="EYETEX DAZZLER"
<?php
if(!empty($row['brand']))
 {
if($row["brand"]=='EYETEX DAZZLER')
{
	echo "selected";
}
}
?>
>EYETEX DAZZLER</option>

<option
value="ORIFLAME"
<?php
if(!empty($row['brand']))
 {
if($row["brand"]=='ORIFLAME')
{
	echo "selected";
}
}
?>
>ORIFLAME</option>

<option
value="NIVEA"
<?php
if(!empty($row['brand']))
 {
if($row["brand"]=='NIVEA')
{
	echo "selected";
}
}
?>
>NIVEA</option>
</select></h2>


<h2>DESCRIPTION:   <input type="text" name="description" value="<?php if(!empty($row['description'])) { echo $row['description']; } ?>"></h2>

<h2>PRICE:   <input type="number"min=1 name="price" value="<?php if(!empty($row['price'])) { echo $row['price']; } ?>"></h2>

</br>

<button type="submit" name="b_update" id="b_update" onClick="update()"><strong>UPDATE</strong></button>
<a href="edit_cosmetic_products_php.php"><button type="button" value="button"><b>CANCEL</b></button></a>
</form></br></br>

<script>
function update()
{
	var x;
	if(confirm("SUCCESSFUL UPDATION OF THE COSMETIC PRODUCT RECORD")==true)
	{  
  	  x="update";
	}
}
</script>



<?php
echo "<center>";
echo "<form action=\"http://localhost/cosmetics/cosmetic_product_options.html\" method=POST>";
echo "<input type=\"submit\" name=\"button\"  value=\"back\" >";
echo "</form>";
echo "</center>";
?>
</div>
</body>
</center>
</html>
</br></br>