<?php
include 'connect.php';
include 'menubar.php';
include 'catbar.php';
if(isset($_GET['id']))
{
	
	$sql="select * from products where prod_id='$_GET[id]' LIMIT 0,12";
	$result = mysqli_query($conn, $sql);
	$row=mysqli_fetch_array($result);
	//while($row=mysqli_fetch_array($result))
	{
		echo '<table cellspacing="10">
		<tr><td style=\"width:50pc;padding:15px\"><img style=\"display:inline;float:left;width:250px;height:auto !important;\" src=images/imgs/'.$row['img_path']. '></img></td>
		<td style=\"width:50pc;\"><b>Product Name</b> : '.$row['prod_name'].'<br/><br/>
		<b>Model</b> : '.$row['model'].'</center><br/><br/>
		<b>Actual Price</b> : <strike>Rs.'.$row['list_price'].'</strike><br/><br/>
		<b>Our Price</b> : Rs.'.$row['our_price'].'<br/><br/>
		<b>Weight</b> : '.$row['weight'].' Kg <br/><br/>
		<p align="justify">'.$row['prod_desc'].'</p></td></tr></table>';
	}
}
include "footer.php"
?>