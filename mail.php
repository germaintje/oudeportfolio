<?php 

if (isset($_POST['submit'])) {
    $name = $_POST['name']; 
    $mailFrom = $_POST['email']; 
    $phonenumber = $_POST['telefoonnummer']; 
    $subject = $_POST['onderwerp']; 
    $message = $_POST['bericht']; 

    $mailTo = "contact@germaindejong.nl";
    $headers = "From: ".$mailFrom;
    $txt= "Je hebt een email gekregen van ".$name.".\n\nTelefoonnummer:".$phonenumber.".\n\nBericht:\n".$message;

    mail($mailTo, $subject, $txt, $headers);
    header("Location: index.php?mailsend");

}
?>