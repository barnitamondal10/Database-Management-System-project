
<?php
$con=mysqli_connect("localhost:3306","root","");
mysqli_select_db($con,"cosmetics_store");

if (isset($_GET['e_did']))
{
	$sql="select * from dealer where did='$_GET[e_did]'";
	$result=mysqli_query($con,$sql);
	$row=mysqli_fetch_array($result);
}

if (isset($_POST['b_update']))
{
	$upd="UPDATE dealer SET dname='$_POST[dname]',gender='$_POST[gender]',address='$_POST[address]',phone_no='$_POST[phone_no]',email='$_POST[email]' where did='$_GET[e_did]'";
	$up=mysqli_query($con,$upd);
	if(!isset($sql))
	{
	   die("ERROR $sql".mysqli_connect_error());
	}
	else
	{
	   header("refresh:5;url=edit_dealer_php.php");
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
font-size: 22px;
color: yellow;
}
h3 {
font-size: 20px;
   color: white; 
}

.aa{
width: 800px;
height: 550px;
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

<body style="background-image: url(update_dealer.jpg); background-size: 100%,100%; background-repeat: no-repeat">
<center>
<form method="POST">
</br>
<h1><u>EDIT DEALER RECORDS</u></h1>

<h2>DEALER_ID:   <input type="text" name="did" value="<?php if(!empty($row['did'])) { echo $row['did']; } ?> "></h2>

<h2>DEALER_NAME:  <input type="text" name="dname" value="<?php if(!empty($row['dname'])) {echo $row['dname']; } ?>"></h2>



<h2>GENDER:   <input type="radio" name="gender" value="male"
<?php
if(!empty($row['gender'])) 
{
if($row["gender"]=='male')
{
echo "checked";
}
}
?>
>MALE
 <input type="radio" name="gender" value="female"
<?php
if(!empty($row['gender']))
 {
if($row["gender"]=='female')
{
echo "checked";
}
}
?>
>FEMALE
 <input type="radio" name="gender" value="others"
<?php
if(!empty($row['gender']))
 {
if($row["gender"]=='others')
{
echo "checked";
}
}
?>
>OTHERS</h2>


<h2>ADDRESS:   <input type="text" name="address" value="<?php if(!empty($row['address'])) { echo $row['address']; } ?>"></h2>

<h2>PHONE_NO:   <input type="number" name="phone_no" value="<?php if(!empty($row['phone_no'])) { echo $row['phone_no']; } ?>"></h2>

<h2>EMAIL:   <input type="text" name="email" value="<?php if(!empty($row['email'])) { echo $row['email']; } ?>"></h2>
</br>

<button type="submit" name="b_update" id="b_update" onClick="update()"><strong>UPDATE</strong></button>
<a href="edit_dealer_php.php"><button type="button" value="button"><b>CANCEL</b></button></a>
</br></br>
</form>

<script>
function update()
{
	var x;
	if(confirm("SUCCESSFUL UPDATION OF THE DEALER RECORD")==true)
	{  
  	  x="update";
	}
}
</script>



<?php
echo "<center>";
echo "<form action=\"http://localhost/cosmetics/dealer_options.html\" method=POST>";
echo "<input type=\"submit\" name=\"button\"  value=\"BACK\" >";
echo "</form>";
echo "</center>";
?>

</div>
</body>
</center>
</html>
</br></br>
