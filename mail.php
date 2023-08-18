<?php 
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $to = "toanvanvo08@gmail.com";
    $subject = "Mail from Toan's website";

    $txt = "Name = ".$name . "\r\n Email = " .$email . "\r\n Message = " . $message;
    $headers = "From: noreply@toanvo.dev" . "\r\n" . 
        "CC: somebody@example.com";

    if($email!=NULL){
        mail($to,$subject,$txt,$headers);
    }
    //redirect
    header("Location:thankyou.html");
?>

