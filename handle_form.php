<?php // handle_form.php this script recieves data from contact.html and sends it in an email.

//show all possible problems
error_reporting (E_ALL | E_STRICT);

//show errors
ini_set ('display_errors', 1);

// Check for form submission:
if ( isset($_POST['submit'] ) ) 
{
$recipient = 'john@naturecoastdesign.net';
$subject = 'Job Application';
$header = 'john@naturecoastdesign.net';
$redirect = 'http://www.citruspools.com/handler.php';

echo $_POST['form_input_array'] ;
	// Minimal form validation:
	if (!empty($_POST['name']) && !empty($_POST['email']) ) 
	{
		// Create the body:
		$body = "Name: {$_POST['first_name']}".''."{$_POST['last_name']}\n\n
		Present Address: {$_POST['Present Address']}".''."{$_POST['Present City']}".','."
		{$_POST['Present State']} ".''."{$_POST['Present Zip']}\n\n
		Permanent Address: {$_POST['Permanent Address']}".''."{$_POST['Permanent City']}".','."
		{$_POST['Permanent State']} ".''."{$_POST['Permanent Zip']}\n\n
		Phone: {$_POST['Phone Number']}\n\n
		Secondary Phone Number: {$_POST['Secondary Phone Number']}\n\n
		Referred By: {$_POST['Referred By']}\n\n
		Position: {$_POST['Position']}\n\n
		Date You Can Start: {$_POST['start date']}\n\n
		Salery Desired: {$_POST['Salery']}\n\n
		Are You Employed Now: {$_POST['Employed']}\n\n
		If So, May We Inquire Of Your Former Employer: {$_POST['Former Employer']}\n\n
		Are You Legally Authorized To Work In The U.S.: {$_POST['Work']}\n\n
		Have You Ever Applied Here Before: {$_POST['Applied']}\n\n
		Where: {$_POST['Where']}\n\n
		When: {$_POST['When']}\n\n
		High School Name and Location: {$_POST['High School Location']}\n\n
		High School Years Attended: {$_POST['High School Attended']}\n\n
		High School Did You Graduate: {$_POST['High School Graduate']}\n\n
		High School Subjects Studied: {$_POST['High School Studied']}\n\n
		College Name and Location: {$_POST['College Location']}\n\n
		College Years Attended: {$_POST['College Attended']}\n\n
		College Did You Graduate: {$_POST['College Graduate']}\n\n
		College Subjects Studied: {$_POST['College Studied']}\n\n
		Trade, Business, or Correspondence School Name and Locatio: {$_POST['Trade Studied']}\n\n
		Trade, Business, or Correspondence School Years Attended: {$_POST['Trade Studied']}\n\n
		Trade, Business, or Correspondence School Did You Graduate: {$_POST['Trade Studied']}\n\n
		Trade, Business, or Correspondence School Subjects Studied: {$_POST['Trade Studied']}\n\n
		Subject Of Special Study/Research Work: {$_POST['Subject']}\n\n
		Special Tranning: {$_POST['Tranning']}\n\n
		Special Skills: {$_POST['Skills']}\n\n
		U.S. Military or Navel<br>Services and Rank: {$_POST['Military']}\n\n";
	
		// Send the email:
		mail($recipient , $subject, $body, "From: {$_POST['email']}");
		
		// Clear $_POST (so that the form's not sticky):
		$_POST = array();
		
		header('location: ' . $redirect);
	} 
}
?>
