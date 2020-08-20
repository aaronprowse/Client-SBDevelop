<?php
    //Debug - this will output that the form has failed every time - check the javascript console for debug
//    print_r($_POST);

    $email_to =   'ap@planalink.com';
    $email    =   $_POST['email'];
    if(isset($_POST['subject'])) {
        $subject = $_POST['subject'];
        unset($_POST['subject']);
    }

    $message = "";
    foreach($_POST as $key => $value) {
        $message .= ucfirst(str_replace("_", " ", $key)) . ": " . $value . "\r\n";
    }


    $headers  = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    if (mail($email_to, (isset($subject) ? $subject : ""), wordwrap($message, 70, "\r\n"), $headers)) {
        echo 'sent';
    } else {
        echo 'failed';
    }
