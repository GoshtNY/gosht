<?php
echo "11111111111";
if(isset($_POST['submit'])){
    echo "2222222222222222222";
    $to = "info@gosht.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $name = $_POST['name'];
    $subj = $_POST['subject'];
    $subject = "Form submission";
    $subject2 = "Copy of your form submission";
    $message = $name . " " . $subj . " wrote the following:" . "\n\n" . $_POST['message'];
    $message2 = "Here is a copy of your message " . $name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    echo "3333333";
    mail($to,$subject,$message,$headers);
    echo "444444";
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Mail Sent. Thank you " . $name . ", we will contact you shortly.";
    header("Location: http://www.gosht.com/");
    exit();
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    // You cannot use header and echo together. It's one or the other.
    }

?>
