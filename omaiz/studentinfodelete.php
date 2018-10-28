<?php
session_start();
$servername="localhost";
$username="root";
$password="";
$dbname="hotelmanage";
$tbl_name="student";
$conn=mysqli_connect($servername,$username,$password,$dbname);
$select_db=mysqli_select_db($conn,$dbname)or die(mysqli_error($conn));
$sql="SELECT * FROM $tbl_name";
$result=mysqli_query($conn,$sql) or die(mysqli_error($conn));

if(isset($_POST['Submit']))
{
	$lfno=$_POST['lfno'];
	$sel="SELECT * FROM student WHERE lfno ='$lfno'";
	$cq=mysqli_query($conn,$sel) or die(mysqli_error($conn));
$ret=mysqli_num_rows($cq);
if($ret==false)
{
	echo"<center><h2 style='color:red'>LFNO does not exist</h2></center>";
}
else
{
	$sel="delete from student where lfno='$lfno'";
	$cq=mysqli_query ($conn,$sel)or die(mysqli_error($conn));
	echo"<center><h2 style='color:red'>Student detatils deleted</h2></center>";
}
}
Mysqli_close($conn);
?>
<html>
<head>
<body style="background-color:#E5E5E5">
	<div class="header">
    <h1>Delete Information Menu </h1>
    </div>
<title> deletion_form</title>
</head>
<link rel="stylesheet" type="text/css" href="style.css"/>
<form action=""method="post">
<table border="0" align="center">
<tbody>
<tr>
<td><label for="id">Enter LFNO to be deleted:</label></td>
<td><input id="id" maxlength="50" name="lfno" type="text"/></td>
</tr>
<tr>
<td align="right" ><input name="Submit" type="Submit" value="Delete"/>&nbsp;<input
type="reset" onClick="refresh()"></p></td></tr>
</tbody>
</table>
</form>
</html>

		
