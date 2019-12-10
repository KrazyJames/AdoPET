<?php 
    $name = $_POST['Name'];
    $email = $_POST['Email'];
    $message = $_POST['Message'];
    $formcontent="From: $name \n Message: $message";
    $recipient = "jaime.escobar.mtz@gmail.com";
    $subject = "Contact Form";
    $mailheader = 'From: '.$email." \r\n".
    'X-Mailer: PHP/'.phpversion();
    @mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
    echo "Thank You!";
    header('location:contact.php');
?>