<?php
include 'connect.php';
include 'menubar.php';
include 'catbar.php';

echo '           

			


<form name="login" action="login.php" method="post">	

				<table cellpadding="0" cellspacing="0" border="0" align="center" class="content_wrapper_table">
					<tbody><tr><td class="content_wrapper_td">

<table cellpadding="0" cellspacing="0" border="0" class="cont_heading_table">
	<tbody><tr><td class="cont_heading_td"><cufon class="cufon cufon-canvas" alt="Welcome, " style="width: 105px; height: 24px;"><canvas width="130" height="27" style="width: 130px; height: 27px; top: -2px; left: -1px;"></canvas><cufontext>Welcome, </cufontext></cufon><cufon class="cufon cufon-canvas" alt="Please " style="width: 71px; height: 24px;"><canvas width="96" height="27" style="width: 96px; height: 27px; top: -2px; left: -1px;"></canvas><cufontext>Please </cufontext></cufon><cufon class="cufon cufon-canvas" alt="Sign " style="width: 51px; height: 24px;"><canvas width="76" height="27" style="width: 76px; height: 27px; top: -2px; left: -1px;"></canvas><cufontext>Sign </cufontext></cufon><cufon class="cufon cufon-canvas" alt="In" style="width: 20px; height: 24px;"><canvas width="37" height="27" style="width: 37px; height: 27px; top: -2px; left: -1px;"></canvas><cufontext>In</cufontext></cufon></td></tr>
</tbody></table>								
  
				<table cellpadding="0" cellspacing="0" border="0" align="center" class="content_wrapper1_table">
					<tbody><tr><td class="content_wrapper1_td"> 
	<table border="0" width="100%" cellspacing="0" cellpadding="0">
          <tbody><tr>
            <td class="main indent_2" width="50%"><b>New Customer</b></td>
			<td><img src="images/pixel_trans.gif" border="0" alt="" width="10" height="1"></td>
            <td class="main indent_2" width="50%"><b>Returning Customer</b></td>
          </tr>
          <tr>
            <td width="50%" height="100%">
				

 	<table cellpadding="0" cellspacing="0" border="0" align="center" class="infoBox_">
		<tbody><tr><td class="infoBox__">
				<table border="0" width="100%" height="100%" cellspacing="5" cellpadding="0" style="height:240px;">
                  <tbody><tr>
                    <td><img src="images/pixel_trans.gif" border="0" alt="" width="100%" height="10"></td>
                  </tr>
                  <tr>
                    <td class="main" style="height:100%;">I am a new customer.<br><br>By creating an account at Computer Peripherals Online store you will be able to shop faster, be up to date on an orders status, and keep track of the orders you have previously made.</td>
                  </tr>
                  <tr>
                    <td><img src="images/pixel_trans.gif" border="0" alt="" width="100%" height="10"></td>
                  </tr>
                  <tr>
                    <td><table border="0" width="100%" cellspacing="0" cellpadding="2">
                      <tbody><tr>
                        <td width="10"><img src="images/pixel_trans.gif" border="0" alt="" width="10" height="1"></td>
                        <td align="right"><a href="signup.php"><img src="includes/languages/english/images/buttons/button_continue.gif" border="0" alt="Continue" title=" Continue " width="55" height="22"></a></td>
                        <td width="10"><img src="images/pixel_trans.gif" border="0" alt="" width="10" height="1"></td>
                      </tr>
                    </tbody></table>
					
					</td>
                  </tr>
                </tbody></table>
				
</td></tr>
	</tbody></table>
			</td>
			<td><img src="images/pixel_trans.gif" border="0" alt="" width="1" height="1"></td>
            <td width="50%" height="100%">
				

 	<table cellpadding="0" cellspacing="0" border="0" align="center" class="infoBox_">
		<tbody><tr><td class="infoBox__">
				<table border="0" width="100%" height="100%" cellspacing="5" cellpadding="0" style="height:240px;">
                  <tbody><tr><td><img src="images/pixel_trans.gif" border="0" alt="" width="100%" height="10"></td></tr>
                  <tr> <td class="main" colspan="2">I am a returning customer.</td></tr>
                  <tr><td><img src="images/pixel_trans.gif" border="0" alt="" width="100%" height="10"></td></tr>
                  <tr><td class="main"><b>E-Mail Address:</b></td></tr>
                  <tr><td class="main width3_100"><input type="text" name="email"></td></tr>
                  <tr><td class="main"><b>Password:</b></td></tr>
                    <tr><td class="main width3_100"><input type="password" name="password" maxlength="40"></td></tr>
                  <tr><td colspan="2"><img src="images/pixel_trans.gif" border="0" alt="" width="100%" height="10"></td></tr>
                  <tr><!-- <td class="smallText"><a href="http://localhost/SITE/password_forgotten.php?osCsid=mb0bghk5ddn4takj3v5c56gmc4">Password forgotten? Click here.</a></td>--></tr>
                  <tr><td height="100%"><img src="images/pixel_trans.gif" border="0" alt="" width="100%" height="10"></td></tr>
                  <tr><td>
                  	<table border="0" width="100%" cellspacing="0" cellpadding="2">
                      <tbody><tr>
                        <td width="10"><img src="images/pixel_trans.gif" border="0" alt="" width="10" height="1"></td>
                        <td align="right"><input type="image" src="includes/languages/english/images/buttons/button_login1.gif" border="0" alt="Sign In" title=" Sign In "></td>
                        <td width="10"><img src="images/pixel_trans.gif" border="0" alt="" width="10" height="1"></td>
                      </tr>
                    </tbody></table>
                  </td></tr>
                </tbody></table>
				
</td></tr>
	</tbody></table>
			</td>
          </tr>
        </tbody></table>
	
</td></tr>
  				</tbody></table>      		
</td></tr>
  				</tbody></table>
	</form></td>';
	
	if(isset($_POST['email'])&&isset($_POST['password']))
	{
		$email=$_POST['email'];
		$passwd=sha1($_POST['password']);
		$sql="select count(*) as Count from customers where email='$email' and password='$passwd'";
		$result = mysqli_query($conn, $sql);
		$row=mysqli_fetch_array($result);
		if($row['Count']>0)
		{
			$_SESSION['loggedin']=$_POST['email'];
			//$_SESSION[];
			echo "<script>window.location='index.php';</script>";
		}
		else
			echo "Invalid Login Credentials!<br/>";
	}
	include 'footer.php';
	?>

