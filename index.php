<?php
	$to = 'wiltonricardo6@gmail.com';
	$subject = 'somente um teste';
	$message = '<h1>OLA</h1><p>VAI TOMA NO CU</p>';
	$headers = "from:sender name<wiltonricardo2@outlook.com>\r\n";
	$headers.="Content-type:text/html\r\n";
	mail($to,$subject,$message,$headers);
	
?>



