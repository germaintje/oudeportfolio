<?php
 
if($_POST) {
    $visitor_name = "";
    $visitor_email = "";
    $email_title = "";
    $phonenumber = "";
    $visitor_message = "";
    $recipient = "";
     
    if(isset($_POST['naam'])) {
        $visitor_name = filter_var($_POST['naam'], FILTER_SANITIZE_STRING);
    }
     
    if(isset($_POST['email'])) {
        $visitor_email = str_replace(array("\r", "\n", "%0a", "%0d"), '', $_POST['email']);
        $visitor_email = filter_var($visitor_email, FILTER_VALIDATE_EMAIL);
    }
     
    if(isset($_POST['onderwerp'])) {
        $email_title = filter_var($_POST['onderwerp'], FILTER_SANITIZE_STRING);
    }
     
    if(isset($_POST['telefoonnummer'])) {
        $phonenumber = filter_var($_POST['telefoonnummer'], FILTER_SANITIZE_STRING);
    }
     
    if(isset($_POST['bericht'])) {
        $visitor_message = htmlspecialchars($_POST['bericht']);
    }
    else {
        $recipient = "menus2011@hotmail.com";
    }
     
    $headers  = 'MIME-Version: 1.0' . "\r\n"
    .'Content-type: text/html; charset=utf-8' . "\r\n"
    .'From: ' . $visitor_email . "\r\n";
     
    if(mail($recipient, $email_title, $visitor_message, $headers)) {
        echo "<p>Thank you for contacting us, $visitor_name. You will get a reply within 24 hours.</p>";
    } else {
        echo '<p>We are sorry but the email did not go through.</p>';
    }
     
} else {
    echo '<p>Something went wrong</p>';
}
 
?>
