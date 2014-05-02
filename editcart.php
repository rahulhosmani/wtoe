<?php
include "connect.php";
include "menubar.php";
include "catbar.php";
if(isset($_SESSION['loggedin']))
{
	$chk='SELECT distinct c.user_name,p.img_path,p.prod_id,p.prod_name,p.our_price FROM products p natural join carter c WHERE c.user_name="'.$_SESSION['loggedin'].'"';
	$result=mysqli_query($conn,$chk);
	echo '<table><tr>';
	if($rowcount=mysqli_num_rows($result))
	{
		while($row=mysqli_fetch_array($result))
		{
			echo '<td style="padding-top:14px;">
			<a href=view.php?id='.$row['prod_id'].'>
			<img src=images/imgs/'.$row['img_path']. ' width=45px heigth=45px></img>
			</a></td>
			<td style="padding-top:22px;">'.$row['prod_name'].'</td>
			<td style="padding-top:22px;">Rs. '.$row['our_price'].'/-</td>
			<td><div><a href="deletecartitem.php?prod_id='.$row['prod_id'].'&user_name='.$row['user_name'].'"><img src=removecart.png width=45x height=45px alt=RemoveItem></img><br/>Remove</a></div>
			</td></td></tr><tr>';
		}
		$chk='SELECT SUM(distinct p.our_price) as total FROM products p natural join carter c WHERE c.user_name="'.$_SESSION['loggedin'].'"';
		$result=mysqli_query($conn,$chk);
		if($row=mysqli_fetch_array($result))
			echo '</tr><tr><td colspan="4"><hr></td></tr><tr><td align="right" colspan="2">Total :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td>Rs. '.$row['total'].'/-</td><td></td></tr></table>';
		
		echo '<center><div><a href="buy.php"><img src=checkout.png width=45x height=45px alt=CheckOut></img><br/>Checkout</a></div></center>';
	}
	else
		echo '<div style="color:Red;">No items in cart to display!</div>';
}
else if(!isset($_SESSION['loggedin']))
{
	echo "<script>window.location='login.php';</script>";
}
include "footer.php";
?>
