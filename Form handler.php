<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$Message = $_POST['Message'];

$email_from = 'info@yourwebsite.com';

$email_subject = 'New Form Submission';

$email_body = "User Name: $name.\n".
            = "User Email: $visitor_email.\n".
            = "Subject: $subject.\n".
            = "User Message: $Message.\n";

$to = 'shivanikumari3969@gmail.com';

$header = "From: $email_from \r\n";

$header = "Reply-To: $visitor_email \r\n";



mail($to,$email_subject,$email_body,$header);

header("location: contact.html");


?>