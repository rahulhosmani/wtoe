<?php
include 'connect.php';
include 'menubar.php';
include 'catbar.php';

$query="select distinct category from products";
$res = mysqli_query($conn, $query);
echo '<table><table>';
$y='products_new';
while($cat=mysqli_fetch_array($res))
{
	$sql="SELECT  distinct prod_id, prod_name, model, img_path, category, list_price, our_price, qty, weight, prod_desc FROM products WHERE category ='$cat[category]' order by prod_id desc LIMIT 0,3";

	$result = mysqli_query($conn, $sql);
	$i=0;
	$rowspan=25;
	$colspan=15;
	echo '<tr>';
	$i=0;
		while($row=mysqli_fetch_array($result))
		{
			if($i%3==0&&$i!=0)
			{
			/*	echo '</table><table  align=".$align." class="wrapper_pic_table" ><tbody><tr>
				</tr></tbody><tbody><tr>';*/
				echo '</tr>';
			}  
		echo ' 	
		<td width =33%>	
		 <a href=view.php?id='.$row['prod_id'].'><img src=images/imgs/'.$row['img_path']. ' width=145px heigth=145px></img></span><br/></a>
		Product Name:'.$row['prod_name'].'<br/>
		Model:'.$row['model'].'</center><br/>
		Actual Price: Rs. '.$row['list_price'].'<br/>
		Our Price: Rs. '.$row['our_price'].'<br/>
		Weight:'.$row['weight'].' kg <br/>
		<div><a href=cart.php?name='.$y.'&prod_id='.$row['prod_id'].'&our_price='.$row['our_price'].'><table><tr><td align="left" style="width:20pc;padding-top:20px;"> Add To Cart </td><td align="left" style="width:40pc;"><img float="bottom" src=cart.png width=45x height=45px alt=CheckOut></img></td></tr></table></a></div>
		<br/><br/><br/>
		</td>
		
	
		';
		$i++;	
	
		 }
	
		 
		
	 
}
echo '</table></table>';


include 'footer.php';
?>