<?php
    $name = $_Post['name'];
    $visitor_email = $_Post['email'];
    $number = $_Post['number'];
    $message = $_Post['message'];


    $email_from = 'amangoyal2904@gmail.com';

    $email_subject = "New Form Submission";

    $email_body = "User Name: $name.\n".
                     "User Email: $visitor_email.\n".
                        "User Number: $number.\n".
                           "User Message: $message.\n";

    $to = "amangoyal0294@gmail.com";

    $headers = "From: $email_from \r\n";

    $headers = "Reply-To: $visitor_email \r\n";

    mail($to,$email_subject,$email_body,$headers);

    header("Location: index.html");

?>