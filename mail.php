<?php
$to = "info@anne-miek.com";
$subject = "test formulier";
$message = "Well,\r\n\r\nIt looks like the email is coming through";

$sent = mail($to, $subject, $message);
?>

Message has been sent : <?php echo $sent; ?>