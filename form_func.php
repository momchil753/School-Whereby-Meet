<?php
// Include the PHPMailer class
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php'; // Make sure you have PHPMailer installed with Composer

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Create a new PHPMailer instance
    $mail = new PHPMailer(true);


    try {
        // Server settings
        $mail->isSMTP();
        $mail->Host = 'localhost';  // HMailServer SMTP server (use IP address if needed)
        $mail->SMTPAuth = true;
        $mail->Username = 'admin@127.0.0.1'; // Your SMTP user email
        $mail->Password = '123456'; // SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // Use SSL for port 465
        $mail->Port = 587;  // Use port 465 for SSL encryption

        $mail->SMTPOptions = array(
            'ssl' => array(
                'verify_peer' => false,          // Disable peer verification
                'verify_peer_name' => false,     // Disable peer name verification
                'allow_self_signed' => true      // Allow self-signed certificates
            )
        );
        
        // Recipients
        $mail->setFrom($email, $name);
        $mail->addAddress('momchil2006@abv.bg');  // Add a recipient email
        $mail->addReplyTo($email, $name); // Reply-to address
    
        // Content
        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body    = "<strong>Name:</strong> $name <br><strong>Email:</strong> $email <br><strong>Message:</strong><br>$message";
    
        // Send the email
        if ($mail->send()) {
            echo 'Message has been sent';
        } else {
            echo 'Message could not be sent.';
        }
    } catch (Exception $e) {
        echo "Error: {$mail->ErrorInfo}";
    }
}
?>
