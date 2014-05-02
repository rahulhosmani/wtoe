<?php
include 'connect.php';
include 'menubar.php';
include 'catbar.php';

if(isset($_GET['cat']))
{
	$sql="select * from products where category='$_GET[cat]'";
	$result = mysqli_query($conn, $sql);
	$i=0;
	$rowspan=25;
	$colspan=15;
	echo '<table><table><tr>';
		while($row=mysqli_fetch_array($result))
		{	
			if($i%3==0&&$i!=0)
			{
			/*	echo '</table><table  align=".$align." class="wrapper_pic_table" ><tbody><tr>
				</tr></tbody><tbody><tr>';*/
				echo '</tr><tr>';
			}  
		$z=rawurlencode($_GET['cat']);
		$y="products";	
		//$y=$y."&prod_id=".$row['prod_id'];
		echo '
		<td width =33%>	
		<a href=view.php?id='.$row['prod_id'].'><img src=images/imgs/'.$row['img_path']. ' width=145px heigth=145px></img></span><br/></a>
		Product Name:'.$row['prod_name'].'<br/>
		Model:'.$row['model'].'</center><br/>
		Actual Price:<strike> Rs. '.$row['list_price'].' </strike><br/>
		Our Price: Rs. '.$row['our_price'].'<br/>
		Weight:'.$row['weight'].' kg <br/>
		<div><a href=cart.php?name='.$y.'&cat='.$z.'&prod_id='.$row['prod_id'].'&our_price='.$row['our_price'].'><table><tr><td align="left" style="width:20pc;padding-top:20px;"> Add To Cart </td><td align="left" style="width:40pc;"><img float="bottom" src=cart.png width=45x height=45px alt=CheckOut></img></td></tr></table></a></div>
		<br/><br/><br/>
		</td>
		';
		$i++;
		}
		 echo '</tr></table></table>';
}



include 'footer.php';
?>
