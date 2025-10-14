<?php
if (isset($_POST['send'])) {
    // Collect form data
    $phone    = $_POST['phoneno'];
    $email   = $_POST['email'];
 

    // Receiver Email
    $to = "atulvarshney322@gmail.com";  // 🔴 Replace with your email address

    // Email Subject
    $subject = "New Message from: $phone - $email";

    // Email Body
    $body = "
    <html>
    <head>
      <title>Contact Form Message</title>
    </head>
    <body>
      <h3>Contact Details</h3>
      <p><strong>Phone No:</strong> {$phone}</p>
      <p><strong>Email:</strong> {$email}</p>
      
    </body>
    </html>
    ";

    // Email Headers
    $headers  = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= "From: {$phone} <{$email}>" . "\r\n";

    // Send Mail
    if (mail($to, $subject, $body, $headers)) {
        echo "<h2 style='color:green;'>Mail Sent Successfully!</h2>";
    } else {
        echo "<h2 style='color:red;'>Mail Sending Failed.</h2>";
    }
}
?>
