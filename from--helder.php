<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'https://github.com/suraj-gup';

$email_subject = 'New From Submission';

$email_body = "User Name: $name.\n".
              "User Email: $visitor_email.\n".
               "Subject: $subject.\n".
                 "User Message: $message.\n";


$to = 'sg99102937@gmail.com';


$headers = "from: $email_from \r\n";

$headers .= "Reply-To: $visitor_from \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: contact.html");

?>