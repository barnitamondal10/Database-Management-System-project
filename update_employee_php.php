<?php
$con=mysqli_connect("localhost:3306","root","");
mysqli_select_db($con,"cosmetics_store");

if (isset($_GET['e_eid']))
{
	$sql="select * from employee where eid='$_GET[e_eid]'";
	$result=mysqli_query($con,$sql);
	$row=mysqli_fetch_array($result);
}
if (isset($_POST['b_update']))
{
	$upd="UPDATE employee SET ename='$_POST[ename]',gender='$_POST[gender]',address='$_POST[address]',phone_no='$_POST[phone_no]',dob='$_POST[dob]',quali='$_POST[quali]',apost='$_POST[apost]',dutytime='$_POST[dutytime]',dappoint='$_POST[dappoint]',salary='$_POST[salary]',salary_tax='$_POST[salary_tax]',emp_username='$_POST[emp_username]',emp_password='$_POST[emp_password]'  where eid='$_GET[e_eid]'";
	
	$up=mysqli_query($con,$upd);

	if(!isset($sql))
	{
	   die("ERROR $sql".mysqli_connect_error());
	}
	else
	{
	   header("refresh:3;url=edit_employee_php.php");
	}
}
?>
<!doctype html>
<html>
<style>
h2 {
font-size: 22px;
color: red;
}
</style>

<body style="background-image: url(update_employee.jpg); background-size: 100%,100%; background-repeat: no-repeat">
<center>
<form method="POST">
</br>
<font size="5">
<h1><u>EDIT EMPLOYEE RECORDS</u></h1>
</font>
<h2>EMPLOYEE_ID:    <input type="text" name="eid" value="<?php if(!empty($row['eid'])) { echo $row['eid']; } ?> "></h2>

<h2>EMPLOYEE_NAME:   <input type="text" name="ename" value="<?php if(!empty($row['ename'])) { echo $row['ename']; } ?> "></h2>


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

<h2>DATE_OF_BIRTH:   <input type="date" name="dob" value="<?php if(!empty($row['dob'])) { echo $row['dob']; } ?>"></h2>



<h2>QUALIFICATION:    <select name="quali">
<option disabled selected value>--SELECT AN OPTION--</option>
<option
value="UNMATRICULATE"
<?php
if(!empty($row['quali']))
 {
if($row["quali"]=='UNMATRICULATE')
{
	echo "selected";
}
}
?>
>UNMATRICULATE</option>

<option
value="10TH"
<?php
if(!empty($row['quali']))
 {
if($row["quali"]=='10TH')
{
	echo "selected";
}
}
?>
>10TH</option>

<option
value="12TH"
<?php
if(!empty($row['quali']))
 {
if($row["quali"]=='12TH')
{
	echo "selected";
}
}
?>
>12TH</option>

<option
value="GRADUATION"
<?php
if(!empty($row['quali']))
 {
if($row["quali"]=='GRADUATION')
{
	echo "selected";
}
}
?>
>GRADUATION</option>

<option
value="POST GRADUATION"
<?php
if(!empty($row['quali']))
 {
if($row["quali"]=='POST GRADUATION')
{
	echo "selected";
}
}
?>
>POST GRADUATION</option>
</select></h2>


<h2>APPOINTED_POST:   <input type="radio" name="apost" value="MANAGER"
<?php
if(!empty($row['apost'])) 
{
if($row["apost"]=='MANAGER')
{
echo "checked";
}
}
?>
>MANAGER
 <input type="radio" name="apost" value="SALES_MAN/WOMAN"
<?php
if(!empty($row['apost'])) 
{
if($row["apost"]=='SALES_MAN/WOMAN')
{
echo "checked";
}
}
?>
>SALES_MAN/WOMAN
 <input type="radio" name="apost" value="ACCOUNTANT"
<?php
if(!empty($row['apost'])) 
{
if($row["apost"]=='ACCOUNTANT')
{
echo "checked";
}
}
?>
>ACCOUNTANT
<input type="radio" name="apost" value="ATTENDER"
<?php
if(!empty($row['apost'])) 
{
if($row["apost"]=='ATTENDER')
{
echo "checked";
}
}
?>
>ATTENDER</h2>


<h2>DUTY_TIME:   <input type="text" name="dutytime" value="<?php if(!empty($row['dutytime'])) { echo $row['dutytime']; } ?> "></h2>

<h2>DATE_OF_APPOINTMENT:   <input type="date" name="dappoint" value="<?php if(!empty($row['dappoint'])) { echo $row['dappoint']; } ?>"></h2>

<h2>GROSS_SALARY:   <input type="text" name="salary" value="<?php if(!empty($row['salary'])) { echo $row['salary']; } ?> "></h2>

<h2>NET_SALARY:   <input type="text" name="salary_tax" value="<?php if(!empty($row['salary_tax'])) { echo $row['salary_tax']; } ?> "></h2>

<h2>EMP_USERNAME:   <input type="text" name="emp_username" value="<?php if(!empty($row['emp_username'])) { echo $row['emp_username']; } ?> "></h2>

<h2>EMP_PASSWORD:   <input type="text" name="emp_password" value="<?php if(!empty($row['emp_password'])) { echo $row['emp_password']; } ?> "></h2>
</br></br>

<button type="submit" name="b_update" id="b_update" onClick="update()"><strong><b>UPDATE</b?</strong></button>
<a href="edit_employee_php.php"><button type="button" value="button"><b>CANCEL</b></button></a>
</form>

<script>
function update()
{
	var x;
	if(confirm("SUCCESSFUL UPDATION OF THE EMPLOYEE RECORD")==true)
	{  
  	  x="update";
	}
}
</script>


</body>
</center>
</html>
</br></br>

<?php
echo "<center>";
echo "<form action=\"http://localhost/cosmetics/employee_options.html\" method=POST>";
echo "<b><input type=\"submit\" name=\"button\"  value=\"BACK\" ></b>";
echo "</form>";
echo "</center>";
?>