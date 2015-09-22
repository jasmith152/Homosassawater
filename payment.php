<?php 
// initiate a session
session_start();
// register some session variables
if(!isset($_SESSION['ID'])){
$ID = session_id();
$_SESSION['ID'] = $ID;
}


	
if(isset($_POST['review_payment'])){
	# Show an error message to the user
function error_msg($error, $required = FALSE) {
		global $post;
		echo "<html>\r\n";
		echo "\t<head>\r\n";
		echo "\t\t<title>Form Error</title>\r\n";
		echo "\t\t<style type=\"text/css\">* {font-family: \"Verdana\", \"Arial\", \"Helvetica\", monospace;}</style>\r\n";
		echo "\t</head>\r\n";
		echo "\t<body>\r\n";
		echo "\t\t<p>${error}</p>\r\n\t\t<p><small>&laquo; <a href=\"javascript: history.back();\">go back</a></small></p>\r\n";
		echo "\t</body>\r\n";
		echo "</html>\r\n";
		exit();
}
	$post = array(
			'required'			=> $_POST['required'],
			'first_name'			=> $_POST['first_name'],
			'last_name'				=> $_POST['last_name'],
			'address1'			=> $_POST['address1'],
			'city'			=> $_POST['city'],
			'state'			=> $_POST['state'],
			'zip_code'			=> $_POST['zip_code'],
			'credit_card'				=> $_POST['credit_card'],
			'card_holder'			=> $_POST['card_holder'],
			'card_type'		=> $_POST['card_type'],
			'ccv'	=> $_POST['ccv'],
			'exp_date'	=> $_POST['exp_date'],
			'hswd_account_number'	=> $_POST['hswd_account_number'],
			'company_name'	=> $_POST['company_name'],
			'address2'	=> $_POST['address2'],
			'email'	=> $_POST['email'],
			'phone'	=> $_POST['phone'],
			'service_address'	=> $_POST['service_address'],
			'billing_zip_code'	=> $_POST['billing_zip_code'],
			'amount'	=> $_POST['amount']
		);
	
		
	# Check for missing required fields
		#
		if ((!empty($post['required'])) && ($list = explode(',', $post['required']))) {
			foreach ($list as $value) {
				if (!empty($value) && empty($_POST["$value"])) {
					error_msg("You have left a required field ($value) blank.", TRUE);
				}
			}
		}
		$_SESSION['first_name'] = $post['first_name'];
		$_SESSION['last_name'] = $post['last_name'];
		$_SESSION['address1'] = $post['address1'];
		$_SESSION['city'] = $post['city'];
		$_SESSION['state'] = $post['state'];
		$_SESSION['zip_code'] = $post['zip_code'];
		$_SESSION['credit_card'] = $post['credit_card'];
		$_SESSION['card_holder'] = $post['card_holder'];
		$_SESSION['card_type'] = $post['card_type'];
		$_SESSION['ccv'] = $post['ccv'];
		$_SESSION['exp_date'] = $post['exp_date'];
		$_SESSION['hswd_account_number'] = $post['hswd_account_number'];
		$_SESSION['address2'] = $post['address2'];
		$_SESSION['company_name'] = $post['company_name'];
		$_SESSION['email'] = $post['email'];
		$_SESSION['phone'] = $post['phone'];
		$_SESSION['amount'] = $post['amount'];
		$_SESSION['service_address'] = $post['service_address'];
		$_SESSION['billing_zip_code'] = $post['billing_zip_code'];
		$_SESSION['required'] = $post['required'];
		header('Location: http://www.homosassawater.com/review_payment.php');
}else{
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="content-type" content="text/html;charset=ISO-8859-1" />
  <meta name="description" content="Homosassa Special Water District news and current events" />
  <title>Payment Page</title>
  <link rel="stylesheet" type="text/css" media="screen" href="styles.css" />
</head>

<body topmargin="0" marginheight="0" leftmargin="0" rightmargin="0" marginwidth="0">
<div align="center">
 <div id="header-wrapper" align="center" valign="bottom">
  <img src="images/header-logo.jpg" alt="Homosassa Special Water District" width="407" height="150" border="0" /><img src="images/header-icons.jpg" alt="We Should All Practice Water Conservation" width="540" height="150" border="0" usemap="#icons-map" />
 </div>
<map name="icons-map">
<!-- #$-:Image map file created by GIMP Image Map plug-in -->
<!-- #$-:GIMP Image Map plug-in by Maurits Rijk -->
<!-- #$-:Please do not edit lines starting with "#$" -->
<!-- #$VERSION:2.3 -->
<!-- #$AUTHOR:Chris -->
<area shape="rect" coords="43,42,171,125" alt="Current Restrictions" href="restrictions.html" />
<area shape="rect" coords="193,54,327,125" alt="Frequent Questions" href="frequent-questions.html" />
<area shape="rect" coords="369,53,513,126" alt="Download Forms" href="forms.html" />
</map>
 <div id="topnav-wrapper" align="center">
 <div align="center">
 <table id="topnav" align="center" width="947" cellpadding="0" cellspacing="0" border="0">
  <tr>
   <td align="center"><a href="index.html">HOME</a></td>
   <td align="center"><img src="images/topnav-sep.jpg" width="9" height="37" border="0" /></td>
   <td align="center"><a href="rates.html">RATES</a></td>
   <td align="center"><img src="images/topnav-sep.jpg" width="9" height="37" border="0" /></td>
   <td align="center"><a href="about-us.html">ABOUT US</a></td>
   <td align="center"><img src="images/topnav-sep.jpg" width="9" height="37" border="0" /></td>
   <td align="center"><a href="sample-bill.html">SAMPLE BILL</a></td>
   <td align="center"><img src="images/topnav-sep.jpg" width="9" height="37" border="0" /></td>
   <td align="center"><a href="conservation.html">CONSERVATION</a></td>
   <td align="center"><img src="images/topnav-sep.jpg" width="9" height="37" border="0" /></td>
   <td align="center"><a href="restrictions.html">RESTRICTIONS</a></td>
   <td align="center"><img src="images/topnav-sep.jpg" width="9" height="37" border="0" /></td>
   <!--<td align="center"><a href="projects.php">CURRENT PROJECTS</a></td>
   <td align="center"><img src="images/topnav-sep.jpg" width="9" height="37" border="0" /></td>-->
   <td align="center"><a href="agendas.php">AGENDAS</a></td>
   <td align="center"><img src="images/topnav-sep.jpg" width="9" height="37" border="0" /></td>
   <td align="center"><a href="minutes.php">MINUTES</a></td>
   <td align="center"><img src="images/topnav-sep.jpg" width="9" height="37" border="0" /></td>
   <td align="center"><a href="water-quality.php">WATER QUALITY</a></td>
   <td align="center"><img src="images/topnav-sep.jpg" width="9" height="37" border="0" /></td>
   <td align="center"><a href="news.php">NEWS</a></td>
   <td align="center"><img src="images/topnav-sep.jpg" width="9" height="37" border="0" /></td>
   <td align="center"><a href="links.html">LINKS</a></td>
  </tr>
 </table>
 </div>
 </div>
  <table id="home-content" width="947" cellpadding="0" cellspacing="0" border="0">
  <tr>
   <td id="main-col" align="left" valign="top">
   <form action="payment.php" method="post" accept-charset="utf-8" name="contact_form">
   <input type="hidden" name="required" value="first_name,last_name,address1,city,state,zip_code,credit_card,card_holder,card_type,ccv,exp_date,hswd_account_number,service_address,billing_zip_code,amount" />
	<table align="left" width="85%" border="0" cellspacing="3" cellpadding="3">
  <tr>
    <td align="left" colspan="4" style="background-color:#445aa9;color:#FFF">Billing Information</td>
  </tr>
  <tr>
    <td align="left" colspan="4">* Denotes Required Fields. Enter email address if you wish to receive an email notification of payment</td>
  </tr>
  <tr>
    <td align="right" width="25%">Company Name:</td>
    <td align="left" width="34%"><input type="text" name="company_name" /></td>
    <td width="16%">&nbsp;</td>
    <td width="25%">&nbsp;</td>
  </tr>
  <tr>
    <td align="right"> First Name:</td>
    <td align="left"><input type="text" name="first_name" />
    *</td>
    <td align="right">Last Name:</td>
    <td align="left"><input type="text" name="last_name" />
    *</td>
  </tr>
  <tr>
    <td align="right">Address:</td>
    <td align="left"><input type="text" name="address1" />
    *</td>
    <td align="right">Address2:</td>
    <td align="left"><input type="text" name="address2" /></td>
  </tr>
  <tr>
    <td align="right">City:</td>
    <td align="left"><input type="text" name="city" />
    *</td>
    <td align="right">State:</td>
    <td align="left"><select name="state">
				<option selected="selected" value="-1">Select</option>
				<option value="AK">AK</option>
				<option value="AL">AL</option>
				<option value="AR">AR</option>
				<option value="AZ">AZ</option>
				<option value="CA">CA</option>
				<option value="CO">CO</option>
				<option value="CT">CT</option>
				<option value="DC">DC</option>
				<option value="DE">DE</option>
				<option value="FL">FL</option>
				<option value="GA">GA</option>
				<option value="HI">HI</option>
				<option value="IA">IA</option>
				<option value="ID">ID</option>
				<option value="IL">IL</option>
				<option value="IN">IN</option>
				<option value="KS">KS</option>
				<option value="KY">KY</option>
				<option value="LA">LA</option>
				<option value="MA">MA</option>
				<option value="MD">MD</option>
				<option value="ME">ME</option>
				<option value="MI">MI</option>
				<option value="MN">MN</option>
				<option value="MO">MO</option>
				<option value="MS">MS</option>
				<option value="MT">MT</option>
				<option value="NC">NC</option>
				<option value="ND">ND</option>
				<option value="NE">NE</option>
				<option value="NH">NH</option>
				<option value="NJ">NJ</option>
				<option value="NM">NM</option>
				<option value="NV">NV</option>
				<option value="NY">NY</option>
				<option value="OH">OH</option>
				<option value="OK">OK</option>
				<option value="OR">OR</option>
				<option value="PA">PA</option>
				<option value="RI">RI</option>
				<option value="SC">SC</option>
				<option value="SD">SD</option>
				<option value="TN">TN</option>
				<option value="TX">TX</option>
				<option value="UT">UT</option>
				<option value="VA">VA</option>
				<option value="VT">VT</option>
				<option value="WA">WA</option>
				<option value="WI">WI</option>
				<option value="WV">WV</option>
				<option value="WY">WY</option>
				<option value="AA">AA</option>
				<option value="AE">AE</option>
				<option value="AP">AP</option>
				<option value="AS">AS</option>
				<option value="FM">FM</option>
				<option value="GU">GU</option>
				<option value="MH">MH</option>
				<option value="MP">MP</option>
				<option value="PR">PR</option>
				<option value="PW">PW</option>
				<option value="VI">VI</option>
                </select>
    *</td>
  </tr>
  <tr>
    <td align="right">Postal Code:</td>
    <td align="left"><input type="text" name="zip_code" maxlength="5" />
    *</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td align="right">Phone Number:</td>
    <td align="left"><input type="text" name="phone" /></td>
    <td align="right">Email:</td>
    <td align="left"><input type="text" name="email" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td align="left" colspan="4" style="background-color:#445aa9;color:#FFF">Payment Information</td>
  </tr>
  <tr>
    <td align="left" colspan="4">Please enter your Payment Instructions here</td>
  </tr>
  <tr>
    <td align="right">Credit Card#:</td>
    <td align="left"><input type="text" name="credit_card" maxlength="16"/>
    *</td>
    <td align="right">Card Holder:</td>
    <td align="left"><input type="text" name="card_holder" maxlength="30"/>
    *</td>
  </tr>
  <tr>
    <td align="right">Card Type:</td>
    <td align="left"><select name="card_type">
			<option selected="selected" value="-1">Select</option>
			<option value="VISA">Visa</option>
			<option value="MAST">Master Card</option>
			<option value="DISC">Discover</option>
			<option value="AMER">American Express</option>

		</select>
    *</td>
    <td align="right">CVV Code:</td>
    <td align="left"><input type="password" name="ccv" maxlength="4"/>
    *</td>
  </tr>
  <tr>
    <td align="right">Exp Date:</td>
    <td align="left"><input type="text" name="exp_date" maxlength="7"/>
    *(mm/yyyy)</td>
    <td align="right">Billing Zip Code</td>
    <td align="left"><input type="text" name="billing_zip_code" maxlength="5"/> *</td>
  </tr>
  <tr>
    <td align="left" colspan="4" style="background-color:#445aa9;color:#FFF">&nbsp;</td>
  </tr>
  <tr>
    <td align="right">HSWD Account#:</td>
    <td align="left"><input type="text" name="hswd_account_number" maxlength="16"/>
    *</td>
    <td align="right">Service Address:</td>
    <td align="left"><input type="text" name="service_address" />
    *</td>
  </tr>
  <tr>
    <td align="right">Amount($):</td>
    <td align="left"><input type="text" name="amount" maxlength="6"/>
    *</td>
    <td align="right"></td>
    <td align="left"></td>
  </tr>
  <tr>
    <td colspan="4" align="center"><input type="submit" value="Review Payment" name="review_payment" /></td>
  </tr>
  </table>
  </form><table align="right" border="1"cellpadding="0" cellspacing="0" style="background-color: white"
                                width="15%" bordercolor="#eeeeee">
                                <tr>
                                    <td align="left" rowspan="2" style="width: 100%" valign="top">
                                        
<span id="ctl00_RightBox_lblContactInfo" class="labelfield"><b>Contact us</b><br>HOMOSASSA SPECIAL WATER DISTRICT<br>7922 W GROVER CLEVELAND BLVD<br><br>HOMOSASSA, FL-34446<br>Phone : 352-628-3740<br>Fax : 352-628-4865<br><a href='mailto:hswd@tampabay.rr.com' >Email Address</a></span> </td>
                                </tr>
                                <tr>
                                </tr>
                            </table>
    </td>
  </tr>
 </table>
 <div id="footer-wrapper" align="center">
 <div align="center">
 <table id="footer" width="947" cellpadding="0" cellspacing="0" border="0">
  <tr>
   <td colspan="2" align="center">
    <p align="center">Homosassa Special Water District &bull; PO Box 195, Homosassa, FL 34487<br />Phone: (352) 628-3740 &bull; Fax: (352) 628-4865<br /><a href="mailto:info@homosassawater.com">Info@HomosassaWater.com</a></p>
   </td>
  </tr>
  <tr>
   <td width="50%" align="left" valign="top">
    &copy;2009, Homosassa Special Water District. All rights reserved. Reproduction in whole or in part without permission is prohibited.
   </td>
   <td width="50%" align="right" valign="top">
    This Site Designed &amp; Hosted by <a href="http://www.naturecoastdesign.net" target="_blank">Nature Coast Web Design &amp; Marketing Inc.</a><br /><a href="mailto:info@naturecoastdesign.net">info@naturecoastdesign.net</a>
   </td>
  </tr>
 </table>
 </div>
 </div>
 </div>
</body>
</html>
<?php } ?>