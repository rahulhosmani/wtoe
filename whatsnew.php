<?php
include 'connect.php';
include 'menubar.php';
include 'catbar.php';

//if(isset($_GET['cat']))
//{
	
	$sql="select distinct category from products";
	$result = mysqli_query($conn, $sql);
	while($cat=mysqli_fetch_array($result))
	{
		$sql1="SELECT  distinct `prod_id`, `prod_name`, `model`, `img_path`, `category`, `list_price`, `our_price`, `qty`, `weight`, `prod_desc` FROM `products` WHERE category ='$cat' order by prod_id desc LIMIT 0,1";
		$result1 = mysqli_query($conn, $sql1);
		$i=0;
		$rowspan=25;
		$colspan=15;
		echo '<table><table >
	
		<tr>';
	
		while($row=mysqli_fetch_array($result1))
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
		<br/><br/><br/>
		</td>
		
	
		';
		$i++;	
	
		 }
	
		 echo '</table></table>';
		
	 
}



include 'footer.php';
?>