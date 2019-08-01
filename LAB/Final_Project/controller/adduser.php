<?php
include("../database/config.php");
$uname=$_POST['uname'];
$uemail=$_POST['uemail'];
$pass=$_POST['pass'];
$sql="INSERT INTO customer
 (name,email,pass)
VALUES('$uname','$uemail','$pass')";
$result=mysqli_query($myconn,$sql);
if($result===TRUE)
{
	echo "data added";
}
else
{
	echo "data not added";
}
header("location:../model/allcustomerindex.php");

?>