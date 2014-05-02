<?php
include 'connect.php';
include 'menubar.php';
include 'catbar.php';

echo '            
<form name="create_account" action="" method="post" onsubmit="return check_form(create_account);">
	<input type="hidden" name="action" value="process">
		<table cellpadding="0" cellspacing="0" border="0" align="center" class="content_wrapper_table">
			<tbody><tr><td class="content_wrapper_td">
				<table cellpadding="0" cellspacing="0" border="0" class="cont_heading_table">
				<tbody><tr><td class="cont_heading_td">
				<cufon class="cufon cufon-canvas" alt="My " style="width: 38px; height: 24px;">
				<canvas width="63" height="27" style="width: 63px; height: 27px; top: -2px; left: -1px;">
				</canvas><cufontext>My </cufontext></cufon><cufon class="cufon cufon-canvas" alt="Account " style="width: 92px; height: 24px;"><canvas width="117" height="27" style="width: 117px; height: 27px; top: -2px; left: -1px;"></canvas><cufontext>Account </cufontext></cufon><cufon class="cufon cufon-canvas" alt="Information" style="width: 123px; height: 24px;"><canvas width="139" height="27" style="width: 139px; height: 27px; top: -2px; left: -1px;"></canvas><cufontext>Information</cufontext></cufon></td></tr>
</tbody></table>								
				<table cellpadding="0" cellspacing="0" border="0" align="center" class="content_wrapper1_table">
					<tbody><tr><td class="content_wrapper1_td">	
	<table cellpadding="0" cellspacing="0" border="0">
      <tbody><tr>
        <td class="smallText"><br><font color="#FF0000"><small><b>NOTE:</b></small></font> If you already have an account with us, please login at the <a href="login.php"><u>login page</u></a>.</td>
      </tr>
      <tr>
        <td><img src="images/pixel_trans.gif" border="0" alt="" width="100%" height="10"></td>
      </tr>
		
		</tbody></table><table border="0" width="100%" cellspacing="0" cellpadding="2">
          <tbody><tr>
            <td class="main indent_2"><b>Your Personal Details</b></td>
           <td class="inputRequirement" align="right">* Required information</td>
          </tr>
        </tbody></table>
				

 	<table cellpadding="0" cellspacing="0" border="0" align="center" class="infoBox_">
		<tbody><tr><td class="infoBox__">
			<table border="0" cellspacing="4" cellpadding="2">
              <tbody><tr>
                <td class="main b_width"><strong>Gender:</strong></td>
                <td class="main radio"><input type="radio" name="gender" value="m" style="background:url(images/spacer.gif) 0px 0px repeat;border:0px"> Male <input type="radio" name="gender" value="f" style="background:url(images/spacer.gif) 0px 0px repeat;border:0px"> Female&nbsp;<span class="inputRequirement">*</span></td>
                <td></td>
              </tr>
              <tr>
                <td class="main b_width"><strong>First Name:</strong></td>
                <td class="main width2_100"><input type="text" onchange="validate(this.value,/^[A-z]+$/i,\'fname\');" name="firstname">&nbsp;<span class="inputRequirement">* Only Characters</span></td>
                <td ><span id=\'fname\' style="color:Red;"></span></td>
              </tr>
              <tr>
                <td class="main b_width"><strong>Last Name:</strong></td>
                <td class="main width2_100"><input type="text" onchange="validate(this.value,/^[A-z]+$/i,\'lname\');" name="lastname">&nbsp;<span class="inputRequirement">* Only Characters</span></td>
                <td ><span id=\'lname\' style="color:Red;"></span></td>
              </tr>
              <tr>
                <td class="main b_width"><strong>Date of Birth:</strong></td>
                <td class="main width2_100"><input type="text" name="dob" onchange="validate(this.value,/^[0-1][0-9]-[0-3][0-9]-[0-9][0-9][0-9][0-9]$/i,\'dob\');">&nbsp;<span class="inputRequirement">*  Format: MM-DD-YYYY</span></td>
                <td ><span id=\'dob\' style="color:Red;"></span></td>
              </tr>
              <tr>
                <td class="main b_width"><strong>E-Mail Address:</strong></td>
                <td class="main width2_100"><input onchange="validate(this.value,/^[a-z0-9]+(\.)*[a-z0-9]+@[a-z0-9]+\.[a-z]+$/i,\'eml\');" type="text" id="emal"  name="email">&nbsp;<span class="inputRequirement">* username@domain.com</span></td>
                <td><span id=\'eml\' style="color:Red;"></span></td>
              </tr>
            </tbody>

</td></tr>
	</tbody></table>		

<div style="padding:0px 0px 0px 0px;"><img src="images/spacer.gif" border="0" alt="" width="1" height="1"></div>
	<table cellpadding="0" cellspacing="0" border="0">
      <tbody>
	</tbody></table>			
</td></tr>
	</tbody>

<div style="padding:0px 0px 0px 0px;"><img src="images/spacer.gif" border="0" alt="" width="1" height="1"></div>
    <table cellpadding="0" cellspacing="0" border="0">
	  <tbody><tr>
        <td class="main indent_2"><b>Your Address</b></td>
      </tr>
	</tbody></table>
				

 	<table cellpadding="0" cellspacing="0" border="0" align="center" class="infoBox_">
		<tbody><tr><td class="infoBox__">
			<table border="0" cellspacing="4" cellpadding="2">
              <tbody><tr>
                <td class="main b_width"><strong>Street Address:</strong></td>
                <td class="main width2_100"><input type="text" name="street">&nbsp;<span class="inputRequirement">*</span></td>
                <td></td>
              </tr>
              <tr>
                <td class="main b_width"><strong>Suburb:</strong></td>
                <td class="main width2_100"><input type="text" name="suburb">&nbsp;<span class="inputRequirement">*</span></td>
              </tr>
              <tr>
                <td class="main b_width"><strong>Post Code:</strong></td>
                <td class="main width2_100"><input type="text" name="postcode" onchange="validate(this.value,/^[1-9][0-9]{5}$/,\'pin\');">&nbsp;<span class="inputRequirement">* 6-digit pin code</span></td>
                <td ><span id=\'pin\' style="color:Red;"></span></td>
              </tr>
              <tr>
                <td class="main b_width"><strong>City:</strong></td>
                <td class="main width2_100"><input type="text" name="city">&nbsp;<span class="inputRequirement">*</span></td>
                <td></td>
              </tr>
              <tr>
                <td class="main b_width"><strong>State/Province:</strong></td>
                <td class="main width2_100"><input type="text" name="province">&nbsp;<span class="inputRequirement">*</td>
				<td></td>
              </tr>

                
            </tbody></table>
				
</td></tr>
	</tbody></table>
<div style="padding:0px 0px 0px 0px;"><img src="images/spacer.gif" border="0" alt="" width="1" height="1"></div>
	<table cellpadding="0" cellspacing="0" border="0">
      <tbody><tr>
        <td class="main indent_2"><b>Your Contact Information</b></td>
      </tr>
	</tbody></table>
					

 	<table cellpadding="0" cellspacing="0" border="0" align="center" class="infoBox_">
		<tbody><tr><td class="infoBox__">
			<table border="0" cellspacing="4" cellpadding="2">
              <tbody><tr>
                <td class="main b_width"><strong>Telephone Number:</strong></td>
                <td class="main width2_100"><input type="text" name="telephone" onchange="validate(this.value,/^[0-9]{11}$/,\'ph\');">&nbsp;<span class="inputRequirement">* 11-digit Telephone Number</span></td>
				<td ><span id=\'ph\' style="color:Red;"></span></td>
              </tr>
            
            </tbody></table>
				
</td></tr>
	</tbody></table>
<div style="padding:0px 0px 0px 0px;"><img src="images/spacer.gif" border="0" alt="" width="1" height="1"></div>				

 	
		
<div style="padding:0px 0px 0px 0px;"><img src="images/spacer.gif" border="0" alt="" width="1" height="1"></div>
	<table cellpadding="0" cellspacing="0" border="0">
      <tbody><tr>
        <td class="main indent_2"><b>Your Password</b></td>
      </tr>
	</tbody></table>
					

 	<table cellpadding="0" cellspacing="0" border="0" align="center" class="infoBox_">
		<tbody><tr><td class="infoBox__">
			<table border="0" cellspacing="4" cellpadding="2">
              <tbody><tr>
                <td class="main b_width"><strong>Password:</strong></td>
                <td class="main width2_100"><input type="password"  onchange="validate(this.value,/^((?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,15})$/,\'pass\');" name="password"  maxlength="40">&nbsp;<span class="inputRequirement">* At least one upper case letter, one 
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;lower case letter, and one digit</span></td>
				<td ><span id=\'pass\' style="color:Red;"></span></td>
              </tr>
              <tr>
                <td class="main b_width"><strong>Password Confirmation:</strong></td>
                <td class="main width2_100"><input type="password" onchange="validate(this.value,/^((?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,15})$/,\'cpass\');" name="confirmation" maxlength="40">&nbsp;<span class="inputRequirement">*</span></td>
				<td ><span id=\'cpass\' style="color:Red;"></span></td>
              </tr>
            </tbody></table>
				
</td></tr>
	</tbody></table>
<div style="padding:0px 0px 0px 0px;"><img src="images/spacer.gif" border="0" alt="" width="1" height="1"></div>				
<table cellpadding="0" cellspacing="5" border="0"><tbody><tr><td>
			<table border="0" width="100%" cellspacing="0" cellpadding="2">
				<tbody><tr><td><input type="image" src="includes/languages/english/images/buttons/button_continue.gif" border="0" alt="Continue" title=" Continue "></td></tr>
            </tbody></table>
				
</td></tr></tbody></table>	
</td></tr>
  				</tbody></table>      		
</td></tr>
  				</tbody>
				</table>
				</table>
				</table>
	</form>';
	
	if(isset($_POST['gender']))
	{
		if(isset($_POST['firstname']))
		{
			if(isset($_POST['lastname']))
			{
				if(isset($_POST['dob']))
				{
					if(isset($_POST['email']))
					{
						if(isset($_POST['street']))
						{
							if(isset($_POST['suburb']))
							{
								if(isset($_POST['postcode']))
								{
									if(isset($_POST['province']))
									{
										if(isset($_POST['city']))
										{
											if(isset($_POST['telephone']))
											{
												if(isset($_POST['password']))
												{
													if(isset($_POST['confirmation']))
													{
														$gender=$_POST['gender'];
														$fname=$_POST['firstname'];
														$lname=$_POST['lastname'];
														$dob=$_POST['dob'];
														$eml=$_POST['email'];
														$strt=$_POST['street'];
														$pstcd=$_POST['postcode'];
														$cit=$_POST['city'];
														$tel=$_POST['telephone'];
														$pass=sha1($_POST['password']);
														$conf=sha1($_POST['confirmation']);
														if($pass===$conf)
														{
															mysqli_query($conn,"BEGIN WORK;");
															$sql="INSERT INTO `customers` VALUES ('$gender','$fname','$lname','$dob','$eml','$tel','$pass');";
															$sql1="INSERT INTO `address_book`( `email`,`street`,`suburb`,`postcode`, `city`, `province`) VALUES ('$eml','$strt','$_POST[suburb]','$pstcd','$cit','$_POST[province]')";
															$result = mysqli_query($conn, $sql);
															//echo $sql."<br/>".$sql1."<br/>";
															if($result)
															{	
															
																$result = mysqli_query($conn, $sql1);
																if($result)
																{
																	echo '<div style="color:Blue;">Registration Successfully!</div><br/><br/>';
																	mysqli_query($conn,"COMMIT;");
																}
																else
																{
																	echo '<div style="color:Red;">Invalid credentials! Try Again ..!!</div><br/><br/>';
																	mysqli_query($conn,"ROLLBACK;");
																}
															}
															else
															{
																echo 'hi';
																mysqli_query($conn,"ROLLBACK;");
																echo '<div style="color:Red;">Invalid credentials! Try Again ..!!</div><br/><br/>';
															}
														}
														else
															echo '<div style="color:Red;">Passwords Do Not Match! Try Again ..!!</div><br/><br/>';
													}
												}
											}
										}
									}
								}
							}
						}
					}
				}
			}
		}
	}
												
	include 'footer.php';
	?>

