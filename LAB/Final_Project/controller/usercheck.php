<?php
include("../database/config.php");
session_start();
$uname=$_POST['uname'];
$pass=$_POST['pass'];
$sql="SELECT * FROM customer WHERE name='$uname' AND pass='$pass'";
$result=mysqli_query($myconn,$sql);
$count=mysqli_num_rows($result);
if($count===1)
{
	$_SESSION['uname']=$uname;
	header("location:model/allcustomerindex.php");
}
else
{
	echo ' User name='.$uname.' or password='.$pass.' wrong<br> <a href="../view/login.php"> Try again </a>';
}



?>