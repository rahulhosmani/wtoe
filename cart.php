<?php
include "connect.php";
echo 'hi'.$_SESSION['loggedin'];
if(isset($_SESSION['loggedin'])&&isset($_GET['prod_id']))
{
	$chk="select qty,our_price from products where prod_id=$_GET[prod_id]";
	$result=mysqli_query($conn,$chk);
	$row=mysqli_fetch_array($result);
	if($row)
	{
	$sql1="insert into  carter values('$_SESSION[loggedin]',$_GET[prod_id],$_GET[our_price]);";
	echo $sql1;
	$result1=mysqli_query($conn,$sql1);
	
	$t=$_GET['name'];
	if(isset($_GET['cat']))
	{
		$s=$_GET['cat'];
		echo "<script>window.location='$t.php?cat=$s';</script>";
	}
	else
		echo "<script>window.location='$t.php';</script>";
	}
}
else
{
	echo "<script>window.location='login.php';</script>";
}
?>