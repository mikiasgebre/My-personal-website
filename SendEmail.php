<?php
ob_start();
session_start();
$_SESSION['message'] = "Thank you for your email. I will get back to you soon!";

require 'PHPMailer/PHPMailerAutoload.php';


    $mail = new PHPMailer;
    $mail->isMail();                            // Set mailer to use SMTP
    $mail->Host = '***********';             // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                     // Enable SMTP authentication
    $mail->Username = '*************';          // SMTP username
    $mail->Password = '*********'; // SMTP password
    $mail->SMTPSecure = 'tls';                  // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 465;
    $mail->SingleTo = true;

    $name = $_GET['name'];
    $email = $_GET['email'];
    $message = $_GET['message'];
     $var = $_GET['var'];

    $mail->setFrom('info@gmail.com', 'CodexWorld');
    $mail->addReplyTo('info@gmail.com', 'CodexWorld');
    $mail->From = "mymail@gmail.com";
    $mail->FromName = "mikiasgebre.com";
    $address = "whoto@otherdomain.com";
    $mail->addAddress($address,"mikiasgebre.com");


    $email_from = $email;
    $email_subject = "New Form submission";
    $email_body = "You have received a new message from the user " . "$name.\n".
        "Here is the message:\n .$message".


    $body = $message;
    $visitor_email = $email;
    $to = "mikiasgebre@gmail.com";
    $headers = $email;
    $headers .= "Reply-To: $visitor_email \r\n";
    mail($to,$email_subject,$email_body,$headers);


    $mail->isHTML(true);  // Set email format to HTML

    $bodyContent = '<h1>How to Send Email using PHP in Localhost by CodexWorld</h1>';
    $bodyContent .= '<p>This is the HTML email sent from localhost using PHP script by <b>CodexWorld</b></p>';

    $mail->Subject = 'Email from Localhost by CodexWorld';
    $mail->Body = $bodyContent;


    if (!$mail->send()) {
        echo 'Message could not be sent.';
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    } else {
        echo "Message has been sent .$name.";
        echo $_GET['name'];
        echo $_GET['var'];
        header("Location: index.html?message=done");
        die();

    }
?>'
<script>var data = '<?= $_SESSION['message'] ?>';</script>
