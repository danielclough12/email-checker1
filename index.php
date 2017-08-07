<?php /*
// using SendGrid's PHP Library
// https://github.com/sendgrid/sendgrid-php
// If you are using Composer (recommended)
require 'vendor/autoload.php';
$from = new SendGrid\Email("Example User", "daniel@pacifictech.us");
$subject = "Sending with SendGrid is Fun";
$to = new SendGrid\Email("Example User", "daniel.alan.clough@gmail.com");
$content = new SendGrid\Content("text/plain", "and easy to do anywhere, even with PHP");
$mail = new SendGrid\Mail($from, $subject, $to, $content);
$apiKey = getenv('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');
$sg = new \SendGrid($apiKey);
$response = $sg->client->mail()->send()->post($mail);
echo $response->statusCode();
print_r($response->headers());
echo $response->body();
$sendgrid->send($mail);
?>
<?php */
require 'vendor/autoload.php';
$sendgrid = new SendGrid("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");
$email    = new SendGrid\Email();

$email->addTo("test@sendgrid.com")
      ->setFrom("daniel.alan.clough@gmail.com")
      ->setSubject("Sending with SendGrid is Fun")
      ->setHtml("and easy to do anywhere, even with PHP");

$sendgrid->send($email);
?>
