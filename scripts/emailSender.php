<?php
require '../vendor/phpmailer/phpmailer/src/Exception.php';
require '../vendor/phpmailer/phpmailer/src/PHPMailer.php';
require '../vendor/phpmailer/phpmailer/src/SMTP.php';
require 'validator.php';
require 'reCaptcha.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $reCaptcha = new reCaptcha();

    $verificationResult = $reCaptcha->verify();

    if ($verificationResult['success']) {
        $email = $_POST['email'];
        $name = $_POST['name'];
        $pono = $_POST['number'];
        $request = $_POST['request'];
        $description = $_POST['description'];  

        $emailSender = new EmailSender();

        $emailSender->sendEmail($name, $email, $pono, $request, $description);

        header("Location: ../webpages/contact_us.php?error=none");
        exit();
    } else {
        header("Location: ../webpages/contact_us.php?error=RecaptchaVerificationFailed");
        exit();
    }
}

if (isset($_SESSION['errors'])) {
    foreach ($_SESSION['errors'] as $error) {
        echo $error . '<br>';
    }
    unset($_SESSION['errors']);
}

class EmailSender {
    public function sendEmail($name, $email, $pono, $request, $description) {
        $validator = new FormValidator();

        $errors = $validator->validateForm($name, $email, $pono, $request, $description);

        if (empty($errors)) {
            $mail = new PHPMailer(true);

            try {
                $mail->isSMTP();
                $mail->Host = 'smtp.gmail.com';
                $mail->SMTPAuth = true;
                $mail->Username = 'SENDER_EMAIL'; 
                $mail->Password = 'wgrmjbujfbffioox'; 
                $mail->SMTPSecure = 'tls';
                //$mail->Port = 587;
                $mail->Port = 465;

                // Sender and Receiver
                $mail->setFrom('SENDER_EMAIL', 'EZaudit Mailer'); // Set the sender's email address and name
                $mail->addAddress('RECEIVER_EMAIL', 'EZaudit Customer Service'); // Set the receiver's email address and name

                // Email Content
                $mail->isHTML(true);
                $mail->Subject = "EZaudit $request Request";
                $mail->Body =
                "We wanted to inform you that there has been a new inquiry regarding EZaudit software and Services. Please find the details below: 
                <br><br>
                Name: $name<br>
                Email: $email<br>
                Phone Number: $pono<br>
                Description: $description <br><br>
                It appears that $name is interested in your audit software solutions and would like to learn more about your products. 
                Please take the necessary steps to follow up with $name and provide them with the information they require.";

                $mail->send();

                header("Location: ../webpages/contact_us.php?error=none");
                exit();
            } catch (Exception $e) {
                echo "Message could not be sent. Error: {$mail->ErrorInfo}";
            }
        } else {
            session_start();
            $_SESSION['errors'] = $errors;

            header("Location: ../webpages/contact_us.php?error=PleaseCheckYourInputintheForm");
            exit();
        }
    }
}