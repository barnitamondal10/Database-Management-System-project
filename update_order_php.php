<?php
$con=mysqli_connect("localhost:3306","root","");
mysqli_select_db($con,"cosmetics_store");

if (isset($_GET['e_or_id']))
{
	$sql="select * from orders where or_id='$_GET[e_or_id]'";
	$result=mysqli_query($con,$sql);
	$row=mysqli_fetch_array($result);
}

if (isset($_POST['b_update']))
{
	$upd="UPDATE orders SET or_date='$_POST[or_date]',quantity='$_POST[quantity]',total_price='$_POST[total_price]',ptype='$_POST[ptype]',cust_id='$_POST[cust_id]',cpid='$_POST[cpid]' where or_id='$_GET[e_or_id]'";
	$up=mysqli_query($con,$upd);
	if(!isset($sql))
	{
	   die("ERROR $sql".mysqli_connect_error());
	}
	else
	{
	   header("refresh:3;url=edit_order_php.php");
	}
}

?>
<!doctype html>
<html>
<style type="text/css">
h2 {
font-size: 28px;
color: yellow;
}
h1 {
font-size: 45px;
color: cyan;
}
.aa{
width: 1000px;
height: 800px;
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
.aa button[type="submit"]{
width: 120px;
height: 35px;
border: 0;
border-radius: 5px;
background-color: skyblue;
font-weight: bolder;
font-size: 17px;
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
<div class="aa">
<body style="background-image: url(view_order.jpg); background-size: 100%,100%; background-repeat: no-repeat">
<center>
<form method="POST">
</br>
<font size="5">
</br></br>
<h1>EDIT ORDER RECORDS</h1>
</font>

<h2>ORDER_ID:  <input type="text" name="or_id" value="<?php if(!empty($row['or_id'])) { echo $row['or_id']; } ?> "></h2>

<h2>ORDER_DATE:   <input type="date" name="or_date" value="<?php if(!empty($row['or_date'])) { echo $row['or_date']; } ?>"></h2>

<h2>QUANTITY:   <input type="number"  name="quantity"  value="<?php if(!empty($row['quantity'])) { echo $row['quantity']; } ?> "></h2>

<h2>TOTAL_PRICE:   <input type="number"  name="total_price"  value="<?php if(!empty($row['total_price'])) { echo $row['total_price']; } ?> "></h2>


<h2>PAYMENT_TYPE:   <input type="radio" name="ptype" value="CASH"
<?php
if(!empty($row['ptype'])) 
{
if($row["ptype"]=='CASH')
{
echo "checked";
}
}
?>
>CASH

 <input type="radio" name="ptype" value="CHEQUE"
<?php
if(!empty($row['ptype'])) 
{
if($row["ptype"]=='CHEQUE')
{
echo "checked";
}
}
?>
>CHEQUE

   <input type="radio" name="ptype" value="ONLINE_TRANSFER"
<?php
if(!empty($row['ptype'])) 
{
if($row["ptype"]=='ONLINE_TRANSFER')
{
echo "checked";
}
}
?>
>ONLINE_TRANSFER

   <input type="radio" name="ptype" value="PAYTM"
<?php
if(!empty($row['ptype'])) 
{
if($row["ptype"]=='PAYTM')
{
echo "checked";
}
}
?>
>PAYTM</h2>

<h2>CUSTOMER_ID:   <input type="text" name="cust_id" value="<?php if(!empty($row['cust_id'])) { echo $row['cust_id']; } ?> "></h2>

<h2>COSMETIC_PRODUCT_ID:   <input type="text" name="cpid" value="<?php if(!empty($row['cpid'])) { echo $row['cpid']; } ?> "></h2>
</br></br></br>


<button type="submit" name="b_update" id="b_update" onClick="update()"><strong>UPDATE</strong></button>
<a href="edit_order_php.php"><button type="button" value="button"><b>CANCEL</b></button></a>
</form></br></br>

<script>
function update()
{
	var x;
	if(confirm("SUCCESSFUL UPDATION OF THE ORDER RECORD")==true)
	{  
  	  x="update";
	}
}
</script>



<?php
echo "<center>";
echo "<form action=\"http://localhost/cosmetics/order_options.html\" method=POST>";
echo "<input type=\"submit\" name=\"button\"  value=\"BACK\" >";
echo "</form>";
echo "</center>";
?>
</body>
</center>
</div>
</html>
</br></br>