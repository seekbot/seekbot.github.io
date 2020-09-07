<?php
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email_address = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message']; 

    $email_from = '';
    $email_subject = "Contact from the Seekbot's Journey";
    $email_body = "First Name: $fname.\n".
                    "Last Name: $lname.\n".
                        "Email Address: $email_address.\n".
                            "Subject: $subject.\n".
                                "Message: $message. \n";

    $mailto = "js.jeong2001@gmail.com"

    $headers = "From" $email_from \r\n";

    $headers .= "Reply-To: $email_address \r\n";

    mail($mailto,$email_subject,$email_body,$headers);

    header("Location: contact.html");
?>