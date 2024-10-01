<?php
// Include the necessary PHPMailer files
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'C:/xampp/htdocs/Academy2/PHPMailer/src/Exception.php';
require 'C:/xampp/htdocs/Academy2/PHPMailer/src/PHPMailer.php';
require 'C:/xampp/htdocs/Academy2/PHPMailer/src/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];


$mail = new PHPMailer(true);

try {
    // Server settings
    $mail->SMTPDebug = 2; // Enable verbose debug output (set to 0 for no output)
    $mail->isSMTP(); // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com'; // Specify Gmail SMTP server
    $mail->SMTPAuth = true; // Enable SMTP authentication
    $mail->Username = 'chatter1915@gmail.com'; // Your Gmail address
    $mail->Password = 'pwrajqkxfpczlzwg'; // Use the generated App Password here
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587; // TCP port for TLS (587)

    // Recipients
    $mail->setFrom('chatter1915@gmail.com', 'Cosmo');
    $mail->addAddress('chatter1915@gmail.com', 'Cosmo');

    // Content
   $mail->isHTML(true);
   $mail->Subject = 'New Message from Contact Form';
   $mail->Body    = "<b>Email:</b> $email <br><b>Phone:</b> $phone <br><b>Message:</b> $message";
 

    $mail->send();
    $mail->send();
} catch (Exception $e) {
    // Optionally log the error, but no need to return anything to the client

}
}
?>
