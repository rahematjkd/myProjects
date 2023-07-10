<?php
date_default_timezone_set('Indian/Christmas'); // Set your desired timezone

$recipientEmail = 'rahematjkd@gmail.com';
$subject = 'Automated Email';
$message = 'This is an automated email sent at a particular time.';

$sendDateTime = strtotime('2023-06-01 02:35:00'); // Set the desired date and time to send the email

$currentDateTime = time();

// Check if the current time has reached the send time
if ($currentDateTime >= $sendDateTime) {
    // Use a mail library or the built-in mail() function to send the email
    // Here's an example using the mail() function
    $headers = "From: rahematjkd2@gmail.com"; // Set the sender's email address
    
    if (mail($recipientEmail, $subject, $message, $headers)) {
        echo "Email sent successfully.";
    } else {
        echo "Failed to send email.";
    }
} else {
    echo "Email will be sent at the scheduled time.";
}
?>
