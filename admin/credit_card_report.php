<?php
$cfgProgDir = 'phpSecurePages/';
include($cfgProgDir . "secure.php");

//Establish GET & POST variables
import_request_variables("gp");
$PHP_SELF = $_SERVER['PHP_SELF'];

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Credit Card Report</title>
</head>

<body>
<a href="index.php" style="color:#00F">Back to main page</a><br><br>
<table align="center" width="1500" border="0" cellspacing="3" cellpadding="3">
  <tr>
    <td align="center"><iframe seamless="seamless" width="100%" height="850" frameborder="0" src="../credit_card_error_log.txt" scrolling="yes">
  <p>Your browser does not support iframes.</p>
</iframe>
</td>
  </tr>
</table>
</body>
</html>