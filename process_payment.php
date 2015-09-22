<?php
// initiate a session
session_start();
// register some session variables
if(!isset($_SESSION['ID'])){
header('Location: http://www.homosassawater.com');
}
if(!isset($_SESSION['submit'])){
error_msg("OOpps. You are not authorized to be here. Please go back.", TRUE);
}
if(!isset($_SESSION['answer'])){
error_msg("You did not answer the question at the botton of the page. Please answer the question and try again.", TRUE);
}

/* Logging to a file */
function writeToLog($message){  
   global $newline, $transaction_log;
   if (!$logfile = fopen($transaction_log, "a")) {
      echo "Cannot open $transaction_log file.\n";
      exit();
   }
   $message = "-------------------".$newline.date("m/d/Y H:i:s").$newline.$message.$newline."-------------------".$newline;
   fwrite($logfile, $message);
   return true;
}

// destroy the session
function kill_session(){ 
	// Unset all of the session variables.
	$_SESSION = array();
	
	// If it's desired to kill the session, also delete the session cookie.
	// Note: This will destroy the session, and not just the session data!
	if (ini_get("session.use_cookies")) {
		$params = session_get_cookie_params();
		setcookie(session_name(), '', time() - 42000,
			$params["path"], $params["domain"],
			$params["secure"], $params["httponly"]
		);
	}
	
	// Finally, destroy the session.
	session_destroy();
}
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
# Check for reCaptcha response
if (strtolower($_SESSION['answer']) !== "florida") {
      	error_msg("The answer wasn't entered correctly. Go back and try it again.", TRUE);
}else{
	// set variables
	$credit_card = $_SESSION['credit_card'];
	$card_holder = $_SESSION['card_holder'];
	$card_type = $_SESSION['card_type'];
	$ccv = $_SESSION['ccv'];
	$exp_date = $_SESSION['exp_date'];
	$hswd_account_number = $_SESSION['hswd_account_number'];
	$service_address = $_SESSION['service_address'];
	$amount = $_SESSION['amount'];
	$zip_code = $_SESSION['billing_zip_code'];
	$answer = $_SESSION['answer'];
	$first_name = '';
	$last_name = '';
	$exp_date_month = '';
	$exp_date_year = '';
	//$recipient = 'john@naturecoastdesign.net';
	$recipient = 'hswd@tampabay.rr.com';
	$from = 'webadmin@naturecoastdesign.net';
	$recipient2 = $_SESSION['email'];
	$from2 = 'info@homosassawater.com';
	$newline = "\r\n";
	$transaction_log = "credit_card_error_log.txt";
	
	// break the exp date down to two different variables
	$exp_date_array =  explode ('/', $exp_date);
	$exp_date_month = $exp_date_array['0'];
	$exp_date_year = $exp_date_array['1'];
	// break the card holder name down to two or three different variables
	$card_holder_array =  explode (' ', $card_holder);
	$first_name = $card_holder_array['0'];
	if(isset($card_holder_array['2']) && !empty($card_holder_array['2'])){
		$last_name = $card_holder_array['2'];
		
	}else{
		$last_name = $card_holder_array['1'];
	}
	// open a Curl connection
	$ch = curl_init();
	// set the Curl url
	curl_setopt($ch, CURLOPT_URL,"https://www4.myfloridacounty.com/myflc-pay/OpenPay.do?UserID=51263&serviceID=10595&");
	// set the Curl POST
	curl_setopt($ch, CURLOPT_POST, 1);	
	// set the Curl values in an array
	curl_setopt($ch, CURLOPT_POSTFIELDS, 
	          http_build_query(array('BILL_TO_FNAME' => $first_name,
			  'BILL_TO_LNAME' => $last_name,
			  'CARD_NUMBER' => $credit_card,
			  'CARD_TYPE' => $card_type,
			  'CARD_EXP_MONTH' => $exp_date_month,
			  'CARD_EXP_YEAR' => $exp_date_year,
			  'CVV' => $ccv,
			  'ZIPCODE' => $zip_code,
			  'PAYMENT_AMOUNT' => $amount,
			  'mode' => 'AS'
			  )));
	// set the Curl to receive server response
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	// execute the Curl and receive server response
	$response = curl_exec ($ch);
	// close the Curl
	curl_close ($ch);
	
	// print the response for testing
	//echo $response;
	//echo "<br>";
	
	// create an array of the response with three fields: RC(lets you know if the payment is good or bad),TransDateStamp(full date and time), PaymentUniqueID(payment or conformation number) and, if an error, errorMsg(contains information about the error that has occurred)
	$response_array =  explode ('|', $response);
	// switch to determind what to do with the response
	switch ($response_array['0']) {
		case 'RC=0':
		/*echo "Payment is ok";
		echo "<br>";
		echo $response_array['0'];
		echo "<br>";
		echo $response_array['1'];
		echo "<br>";
		echo $response_array['2'];*/
		
		// Send confirmation email to Homosassa Special Water District
		$subject = "Do Not Reply. Online payment confirmation from Homosassa Special Water District";

		$message = "Submitted by: " . $_SESSION['first_name'] ." ". $_SESSION['last_name']." <" . $_SESSION['email'] . ">\r\n\r\n";

		$message .= "Online Form Fields\r\n";
		$message .= "------------------\r\n";
		
		$message .= "Customer Name: ". $_SESSION['first_name'] ." ". $_SESSION['last_name']."\r\n";
		$message .= "Customer Account Number: ".$hswd_account_number."\r\n";
		$message .= "Payment Amount: ".$amount."\r\n";
		$message .= "Date of payment: ".$response_array['1']."\r\n";
		$message .= "Transaction number from myfloridacounty.com: ".$response_array['2']."\r\n";
		
		# End of message
    	$message .= "------------------\r\n";
		
		// Send confirmation email to Homosassa Special Water District
		$subject2 = "Do Not Reply. Online payment confirmation from Homosassa Special Water District";

		$message2 = "Submitted by: " . $_SESSION['first_name'] ." ". $_SESSION['last_name']." <" . $_SESSION['email'] . ">\r\n\r\n";

		$message2 .= "Online Form Fields\r\n";
		$message2 .= "------------------\r\n";
		
		$message2 .= "Customer Name: ". $_SESSION['first_name'] ." ". $_SESSION['last_name']."\r\n";
		$message2 .= "Customer Account Number: ".$hswd_account_number."\r\n";
		$message2 .= "Payment Amount: ".$amount."\r\n";
		$message2 .= "Date of payment: ".$response_array['1']."\r\n";
		$message2 .= "Confirmation number: ".$response_array['2']."\r\n";
		
		# End of message
    	$message2 .= "------------------\r\n";


		# Send out the email
		#
		if (mail($recipient, $subject, $message, $from) && mail($recipient2, $subject2, $message2, $from2)) {
			if (writeToLog($response)) {
				kill_session();
				header('Location: http://www.homosassawater.com/thank_you.php?amount='.$amount.'&hswd_account_number='.$hswd_account_number.'&confirmation='.$response_array['2'].'');
			} else {
				echo "There is a problem with the log file.";
			}
		} else {
			echo "There is a problem with sending the email.";
		}
		break;
		case 'RC=1':
		writeToLog($response);
		kill_session();
		$error_array =  explode ('=', $response_array['3']);
		echo "There was a problem with the payment.<br> Error messgae: ".$error_array['1'].".<br> Please double check your payment information and try again<br>";
		echo '<a href="payment.php">Back</a>';
		break;
		case 'RC=2':
		writeToLog($response);
		kill_session();
		$error_array =  explode ('=', $response_array['3']);
		echo "There was a problem with the payment.<br> Error messgae: ".$error_array['1'].".<br> Please double check your payment information and try again<br>";
		echo '<a href="payment.php">Back</a>';
		break;
		case 'RC=3':
		writeToLog($response);
		kill_session();
		$error_array =  explode ('=', $response_array['3']);
		echo "There was a problem with the payment.<br> Error messgae: ".$error_array['1'].".<br> Please double check your payment information and try again<br>";
		echo '<a href="payment.php">Back</a>';
		break;
		case 'RC=4':
		writeToLog($response);
		kill_session();
		$error_array =  explode ('=', $response_array['3']);
		echo "There was a problem with the payment.<br> Error messgae: ".$error_array['1'].".<br> Please double check your payment information and try again<br>";
		echo '<a href="payment.php">Back</a>';
		break;
		case 'RC=5':
		writeToLog($response);
		kill_session();
		$error_array =  explode ('=', $response_array['3']);
		echo "There was a problem with the payment.<br> Error messgae: ".$error_array['1'].".<br> Please double check your payment information and try again<br>";
		echo '<a href="payment.php">Back</a>';
		break;
		case 'RC=6':
		writeToLog($response);
		kill_session();
		$error_array =  explode ('=', $response_array['3']);
		echo "There was a problem with the payment.<br> Error messgae: ".$error_array['1'].".<br> Please double check your payment information and try again<br>";
		echo '<a href="payment.php">Back</a>';
		break;
		case 'RC=7':
		writeToLog($response);
		kill_session();
		$error_array =  explode ('=', $response_array['3']);
		echo "There was a problem with the payment.<br> Error messgae: ".$error_array['1'].".<br> Please double check your payment information and try again<br>";
		echo '<a href="payment.php">Back</a>';
		break;
		case 'RC=8':
		writeToLog($response);
		kill_session();
		$error_array =  explode ('=', $response_array['3']);
		echo "There was a problem with the payment.<br> Error messgae: ".$error_array['1'].".<br> Please double check your payment information and try again<br>";
		echo '<a href="payment.php">Back</a>';
		break;
		case 'RC=11':
		writeToLog($response);
		kill_session();
		$error_array =  explode ('=', $response_array['3']);
		echo "There was a problem with the payment.<br> Error messgae: ".$error_array['1'].".<br> Please double check your payment information and try again<br>";
		echo '<a href="payment.php">Back</a>';
		break;
		case 'RC=12':
		writeToLog($response);
		kill_session();
		$error_array =  explode ('=', $response_array['3']);
		echo "There was a problem with the payment.<br> Error messgae: ".$error_array['1'].".<br> Please double check your payment information and try again<br>";
		echo '<a href="payment.php">Back</a>';
		break;
		case 'RC=13':
		writeToLog($response);
		kill_session();
		$error_array =  explode ('=', $response_array['3']);
		echo "There was a problem with the payment.<br> Error messgae: ".$error_array['1'].".<br> Please double check your payment information and try again<br>";
		echo '<a href="payment.php">Back</a>';
		break;
		case 'RC=14':
		echo "Payment is not ok";
		writeToLog($response);
		kill_session();
		$error_array =  explode ('=', $response_array['3']);
		echo "There was a problem with the payment.<br> Error messgae: ".$error_array['1'].".<br> Please double check your payment information and try again<br>";
		echo '<a href="payment.php">Back</a>';
		break;
		case 'RC=15':
		writeToLog($response);
		kill_session();
		$error_array =  explode ('=', $response_array['3']);
		echo "There was a problem with the payment.<br> Error messgae: ".$error_array['1'].".<br> Please double check your payment information and try again<br>";
		echo '<a href="payment.php">Back</a>';
		break;
		case 'RC=999':
		writeToLog($response);
		kill_session();
		$error_array =  explode ('=', $response_array['3']);
		echo "There was a problem with the payment.<br> Error messgae: ".$error_array['1'].".<br> Please double check your payment information and try again<br>";
		echo '<a href="payment.php">Back</a>';
		break;
	}
}
?>