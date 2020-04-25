<?php

$nom = strip_tags(htmlspecialchars($_POST['nom']));
$prenom = strip_tags(htmlspecialchars($_POST['prenom']));
$email = strip_tags(htmlspecialchars($_POST['email']));
$num = strip_tags(htmlspecialchars($_POST['num']));
$hearaboutus = strip_tags(htmlspecialchars($_POST['hearaboutus']));
$subject = strip_tags(htmlspecialchars("Formulaire contact"));
$message = strip_tags(htmlspecialchars($_POST['message']));

$tosend = $nom . ' ' . $prenom . "\n";
$tosend .= 'E-mail: ' . $email . "\n";
$tosend .= 'Num: ' . $num . "\n";
$tosend .= 'Sujet: ' . $subject . "\n";
$tosend .= $message . "\n";

echo $tosend;

require("vendor/sendgrid-php/sendgrid-php.php");


$from = new \SendGrid\Email(null, "riahi.elhem@gmail.com");
$to = new \SendGrid\Email(null, "elhem@osereso.fr");
$content = new \SendGrid\Content("text/plain", $tosend);
$mail = new \SendGrid\Mail($from, $subject, $to, $content);
$apiKey = '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';
$sg = new \SendGrid($apiKey);


try {
    $response = $sg->client->mail()->send()->post($mail);
    echo $response->statusCode();
    echo $response->headers();
    echo $response->body();    
} catch (Exception $ex) {
    echo $ex->getMessage();
}





