<?php // Mail of sender
$mail_from="$customer_mail";
// From
$header="from: $name <$mail_from>";

// Enter your email address
$to ='a.koval1996@gmail.com';

$send_contact=mail($to,$subject,$message,$header); ?>
