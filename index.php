<?php
    if (isset($_POST["submit"])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        $human = intval($_POST['human']);
        $from = 'Demo Contact Form'; 
        $to = 'dentefederico@live.com'; 
        $subject = 'Messaggio dal form ';
        
        $body = "From: $name\n E-Mail: $email\n Message:\n $message";
 
        // Controlla se il nome è stato inserito
        if (!$_POST['name']) {
            $errName = 'Please enter your name';
        }
        
        // Controlla se l'email è stata inserita, e se è valida
        if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $errEmail = 'Please enter a valid email address';
        }
        
        //Controlla se il messaggio è stato inserito
        if (!$_POST['message']) {
            $errMessage = 'Please enter your message';
        }
        //Controlla se il test anti-bot è corretto
        if ($human !== 5) {
            $errHuman = 'Your anti-spam is incorrect';
        }
 
// Se non ci sono errori, manda l'email 
if (!$errName && !$errEmail && !$errMessage && !$errHuman) {
    if (mail ($to, $subject, $body, $from)) {
        $result='<div class="alert alert-success">Thank You! I will be in touch</div>';
    } else {
        $result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later</div>';
    }
}
    }



$title = "Thanks for your message";
echo($title);
?>

