<?php
include "connect.php";
	if(isset($_GET['prod_id'])&&isset($_GET['user_name']))
	{
		$query='delete from carter WHERE prod_id='.$_GET['prod_id'].' and user_name="'.$_GET['user_name'].'"';
		$result=mysqli_query($conn,$query);
		if($result)
			echo "<script>window.location='editcart.php';</script>";
		else
			echo "<div style=\"color:Red;\">Error: Cannot remove item from cart!</div>";
	}
?>
