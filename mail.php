<?php 
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $mailheader = "From:".$name."<".$email.">\r\n";

    $recipient = "toanvanvo08@gmail.com";
    $subject = "Contact Form";

    mail($recipient, $subject, $message, $mailheader)
    or die("Error!");

    echo'
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width", initial-scale="1.0">
            <title>Contact form</title>
            <link rel="stylesheet" href="assets/css/styles.css">
        </head>
        <body>
            <div class="container">
                <h1>Thank you for contacting me. I will get back to you as soon as possible!</h1>
                <p class="back">Go back to the <a href="index.html">homepage</a>.</p>
            </div>
        </body>
        </html>
    ';
?>
