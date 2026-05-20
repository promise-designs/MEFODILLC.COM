<?php

$success = "";
$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);

    $to = "abalekepromise1@gmail.com"; // CHANGE THIS

    $mail_subject = "New Contact Form Message";

    $body = "
    Name: $name

    Email: $email

    Phone: $phone

    Subject: $subject

    Message:
    $message
    ";

    $headers = "From: $email";

    if(mail($to, $mail_subject, $body, $headers)) {

        $success = "
        <div style='
            background:#ffffff;
            border-left:6px solid #c96a00;
            padding:20px;
            border-radius:12px;
            margin-bottom:25px;
            box-shadow:0 5px 20px rgba(0,0,0,0.08);
        '>

            <h4 style='color:#071a35; margin-bottom:10px;'>
                <i class=\"fas fa-check-circle\" style=\"color:#c96a00;\"></i>
                Message Sent Successfully
            </h4>

            <p style='margin:0; color:#555; font-size:16px;'>
                Thank you for contacting 
                <strong>MEFODI SIGN LLC</strong>.
                Our team will get back to you shortly.
            </p>

        </div>
        ";

    } else {

        $error = "
        <div style='
            background:#ffffff;
            border-left:6px solid red;
            padding:20px;
            border-radius:12px;
            margin-bottom:25px;
            box-shadow:0 5px 20px rgba(0,0,0,0.08);
        '>

            <h4 style='color:red; margin-bottom:10px;'>
                <i class=\"fas fa-times-circle\"></i>
                Message Failed
            </h4>

            <p style='margin:0; color:#555; font-size:16px;'>
                Something went wrong. Please try again.
            </p>

        </div>
        ";
    }
}

?>
