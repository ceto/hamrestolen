<?php
if($_POST)
{
	$to_Email	= "stbu@proaktiveiendom.no"; //Replace with recipient email address
	$subject = 'Melding fra Hamrestolen'; //Subject line for emails
	
	
	//check if its an ajax request, exit if not
    if(!isset($_SERVER['HTTP_X_REQUESTED_WITH']) AND strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) != 'xmlhttprequest') {
	
		//exit script outputting json data
		$output = json_encode(
		array(
			'type'=>'error', 
			'text' => 'Request must come from Ajax'
		));
		
		die($output);
    } 
	
	//check $_POST vars are set, exit if any missing
	if(!isset($_POST["userName"]) || !isset($_POST["userEmail"]) || !isset($_POST["userTel"]))
	{
		$output = json_encode(array('type'=>'error', 'text' => 'Inputfelt er tomme!'));
		die($output);
	}

	//Sanitize input data using PHP filter_var().
	$user_Name = filter_var($_POST["userName"], FILTER_SANITIZE_STRING);
	$user_Email = filter_var($_POST["userEmail"], FILTER_SANITIZE_EMAIL);
	$user_Tel = filter_var($_POST["userTel"], FILTER_SANITIZE_STRING);
	
	//$user_Message = str_replace("\&#39;", "'", $user_Message);
	//$user_Message = str_replace("&#39;", "'", $user_Message);
	
	//additional php validation
	if(strlen($user_Name)<4) // If length is less than 4 it will throw an HTTP error.
	{
		$output = json_encode(array('type'=>'error', 'text' => 'Navnet er for kort eller tom!'));
		die($output);
	}
	if(!filter_var($user_Email, FILTER_VALIDATE_EMAIL)) //email validation
	{
		$output = json_encode(array('type'=>'error', 'text' => 'Skriv inn en gyldig e-post!'));
		die($output);
	}
	if(strlen($user_Tel)<6) //check emtpy message
	{
		$output = json_encode(array('type'=>'error', 'text' => 'Legg inn telefonnummeret!'));
		die($output);
	}
	
	//proceed with PHP email.
	$headers = 'From: '.$user_Email.'' . "\r\n" .
	'Reply-To: '.$user_Email.'' . "\r\n" .
	'X-Mailer: PHP/' . phpversion();
	
	$sentMail = @mail($to_Email, $subject, $user_Name . "\r\n\n"  .'-- '.$user_Email. "\r\n" .'-- '.$user_Tel, $headers);
	
	if(!$sentMail)
	{
		$output = json_encode(array('type'=>'error', 'text' => 'Kunne ikke sende e-post! Vennligst sjekk din PHP mail konfigurasjon.'));
		die($output);
	}else{

		//response email to the user, added by ceto
		$resp_headers = 'From: '.$to_Email.'' . "\r\n" .
		'Reply-To: '.$to_Email.'' . "\r\n" .
		'X-Mailer: PHP/' . phpversion();
		
		$resp_text="Hei, ".$user_Name."\r\n\n".
		"Takk for din henvendelse, megler vil oversende prospekt med tegninger så snart dette er ferdigstilt."."\r\n\n".
		"Kontakt meg gjerne om du har spørsmål vedr prosjektet."."\r\n\n".
		"Mvh"."\r\n"."Stian Bussesund"."\r\n"."Partner / Megler"."\r\n"."Proaktiv Eiendom AS."."\r\n"."Tlf: 48 08 13 62";

		@mail($user_Email, $subject, $resp_text, $resp_headers);


		$output = json_encode(array('type'=>'message', 'text' => 'Hei '.$user_Name .'! Takk for din e-post.'));
		die($output);
	}
}
?>