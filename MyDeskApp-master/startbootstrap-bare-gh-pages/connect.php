<?php
if(isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $call = $_POST['call'];
    $priority = $_POST['priority'];
    $type = $_POST['type'];
    $message = $_POST['message'];
    $formcontent = " From: $name \n Phone: $phone \n Call Back: $call \n  Priority: $priority \n Type: $type \n Message: $message";
    $recipient = "YOUREMAIL@HERE.COM";
    $subject = "Contact Form";
    $mailheader = "From: $email \r\n";
    mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
    echo "Thank You!" . " -" . "<a href='contact-us.html' style='text-decoration:none;color:#ff0099;'> Return Home</a>";
}
?>
