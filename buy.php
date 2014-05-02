<?php
include "connect.php";
include "menubar.php";
include "catbar.php";
if(isset($_SESSION['loggedin']))
{
	$chk="select sum(our_price) from carter where user_name='$_SESSION[loggedin]'";
	$result=mysqli_query($conn,$chk);
	$row=mysqli_fetch_array($result);
	$chk11="select count(*) from carter where user_name='$_SESSION[loggedin]'";
	$result11=mysqli_query($conn,$chk11);
	$row11=mysqli_fetch_array($result11);
	if($row)
	{
		$r=0;
		if(!empty($row['sum(our_price)']))
			$r=$row['sum(our_price)'];
		else
			$r=0;
		echo "<br/><br/><br/><br/><h1>You have ".$row11['count(*)']."  purchases worth Rs.".$r."</h1><br/><h2> Thank you for dealing with Sales Point</h2>";
		$chk2="delete from carter where user_name='$_SESSION[loggedin]'";
		$res2=mysqli_query($conn,$chk2);
	}
}
else if(!isset($_SESSION['loggedin']))
{
	echo "<script>window.location='login.php';</script>";
}
include "footer.php";
?>