<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Sending an Email</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<?php

	$message = "This is the new message";
	$header = "From: xtine@missconceptions.net";
	$sent = mail('xtine@missconceptions.net', 'Send an Email', $message, $header);
	
	if($sent){
		echo "the message was sent successfully.";
		} else {
			echo "nope";
			}
	
	?>

</body>
</html>
