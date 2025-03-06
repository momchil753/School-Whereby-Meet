<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Gather form data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);

    // Define the recipient's email address (this will be where the email is sent)
    $to = "receiver@example.com";  // Replace with the actual recipient email address

    // Set the subject of the email
    $email_subject = "Message from: " . $name . " - " . $subject;

    // Create the email body
    $email_body = "You have received a new message from the user " . $name . ".\n\n";
    $email_body .= "Here is the message:\n" . $message . "\n\n";
    $email_body .= "Sender's Email: " . $email;

    // Set the headers (the email format and the sender's email)
    $headers = "From: " . $email . "\r\n";
    $headers .= "Reply-To: " . $email . "\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8";

    // Send the email
    if (mail($to, $email_subject, $email_body, $headers)) {
        echo "Thank you for contacting us! Your message has been sent.";
    } else {
        echo "There was a problem sending your message. Please try again later.";
    }
}
?>
