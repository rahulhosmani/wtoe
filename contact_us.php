<?php 
include "connect.php";
include 'menubar.php';
include 'catbar.php';
echo '
<form name="contact_us" action="" method="post">	

				<table cellpadding="0" cellspacing="0" border="0" align="center" class="content_wrapper_table">
					<tbody><tr><td class="content_wrapper_td">

<table cellpadding="0" cellspacing="0" border="0" class="cont_heading_table">
	<tbody><tr><td class="cont_heading_td"><cufon class="cufon cufon-canvas" alt="Contact " style="width: 87px; height: 24px;"><canvas width="112" height="27" style="width: 112px; height: 27px; top: -2px; left: -1px;"></canvas><cufontext>Contact </cufontext></cufon><cufon class="cufon cufon-canvas" alt="Us" style="width: 26px; height: 24px;"><canvas width="47" height="27" style="width: 47px; height: 27px; top: -2px; left: -1px;"></canvas><cufontext>Us</cufontext></cufon></td></tr>
</tbody></table>								
  
				<table cellpadding="0" cellspacing="0" border="0" align="center" class="content_wrapper1_table">
					<tbody><tr><td class="content_wrapper1_td">
      
				

 	<table cellpadding="0" cellspacing="0" border="0" align="center" class="infoBox_">
		<tbody><tr><td class="infoBox__">
			<table border="0" width="100%" cellspacing="5" cellpadding="0" class="infoBox2_">
              <tbody><tr>
                <td class="main">Full Name:</td>
                <td class="main" style="width:100%;"><input type="text" name="name"></td>
              </tr>
              <tr>
                <td class="main" style="white-space:nowrap;">E-Mail Address:</td>
                <td class="main"><input type="text" name="email"></td>
              </tr>
              <tr>
                <td class="main">Enquiry:</td>
                <td><textarea name="enquiry" wrap="soft" cols="50" rows="15"></textarea></td>
              </tr>
            </tbody></table>
				
</td></tr>
	</tbody></table>
<div style="padding:0px 0px 0px 0px;"><img src="images/spacer.gif" border="0" alt="" width="1" height="1"></div>
<table cellpadding="0" cellspacing="5" border="0"><tbody><tr><td>
			<table border="0" width="100%" cellspacing="0" cellpadding="2">
				<tbody><tr><td align="right"><input type="image" src="includes/languages/english/images/buttons/button_continue.gif" border="0" alt="Continue" title=" Continue "></td></tr>
            </tbody></table>
				
</td></tr></tbody></table>
	
</td></tr>
  				</tbody></table>      		
</td></tr>
  				</tbody></table>
	</form>';
	if(isset($_POST['name'])&&isset($_POST['email'])&&isset($_POST['enquiry']))
	{
		$sql="INSERT INTO `contact_us`( `name`, `email`, `enquir`) VALUES ('$_POST[name]','$_POST[email]','$_POST[enquiry]')";
		$result = mysqli_query($conn, $sql);
		echo "Enquiry posted Successfully!"."<br/>";
	}
	include "footer.php";
	?>