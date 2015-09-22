<?php
// initiate a session
session_start();
// register some session variables
if(!isset($_SESSION['ID'])){
header('Location: http://www.homosassawater.com');
}
if(isset($_POST['submit']) && $_POST['submit'] == 'submit'){
	$_SESSION['answer'] = $_POST['answer'];
	$_SESSION['submit'] = $_POST['submit'];
	header('Location: http://www.homosassawater.com/process_payment.php');
}else{
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="content-type" content="text/html;charset=ISO-8859-1" />
  <meta name="description" content="Homosassa Special Water District news and current events" />
  <title>Review Payment Page</title>
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
	<form action="review_payment.php" method="post" accept-charset="utf-8" name="contact_form">
    <table width="85%" border="0" cellspacing="3" cellpadding="3">
  <tr>
    <td align="left" colspan="4"><span style="font-size:18px; font-weight:bold">Please verify the information below</span></td>
  </tr>
  <tr>
    <td align="right">Credit Card#:</td>
    <td align="left"><?php echo $_SESSION['credit_card'] ?></td>
    <td align="right">Card Holder:</td>
    <td align="left"><?php echo $_SESSION['card_holder'] ?></td>
  </tr>
  <tr>
    <td align="right">Card Type:</td>
    <td align="left"><?php echo $_SESSION['card_type']; ?></td>
    <td align="right">CVV Code:</td>
    <td align="left"><?php echo $_SESSION['ccv']; ?></td>
  </tr>
  <tr>
    <td align="right">Exp Date:</td>
    <td align="left"><?php echo $_SESSION['exp_date']; ?>(mm/yyyy)</td>
    <td align="right">Billing Zip Code</td>
    <td align="left"><?php echo $_SESSION['billing_zip_code']; ?></td>
  </tr>
  <tr>
    <td align="left" colspan="4" style="background-color:#445aa9;color:#FFF">&nbsp;</td>
  </tr>
  <tr>
    <td align="right">HSWD Account#:</td>
    <td align="left"><?php echo $_SESSION['hswd_account_number']; ?></td>
    <td align="right">Service Address:</td>
    <td align="left"><?php echo $_SESSION['service_address']; ?></td>
  </tr>
  <tr>
    <td align="right">Amount($):</td>
    <td align="left"><?php echo $_SESSION['amount']; ?></td>
    <td align="right"></td>
    <td align="left"></td>
  </tr>
  <tr>
    <td colspan="4" align="left"><strong>Disclaimer:</strong> Please be advised that by processing this payment you are agreeing to a 3.5% transaction fee of the total amount to be paid.</td>
  </tr>
  <tr>
    <td colspan="4" align="left"><?php
echo "<p><em>* To reduce SPAM, please answer the question below.</em><br>";
echo "Name a state, in the United States which starts with the letter ‘F’?&nbsp;&nbsp;";
echo "<input type='text' size='10' name='answer' /></p>";
?></td>
  </tr>
  <tr>
    <td colspan="4" align="center"><input type="submit" value="submit" name="submit" />
    &nbsp;&nbsp;&nbsp;&laquo; <a href="javascript: history.back();">Edit Entry</a></td>
  </tr>
  
  </table>
  </form>
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