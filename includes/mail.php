<?php

// ini_set('display_errors', 1);
// error_reporting(E_ALL);

$from = "SBFSC Wildfire Home Protection Guide <noreplay@sbfiresafecouncil.org>";

$to = "dhaval@thelaunchengine.com";

$subject = "Feedback from the SBFSC Wildfire Home Protection Guide";

$message = "<div>";
$message .= "<p>Hi,</p>";
if (!empty($_POST['fname']) && isset($_POST['fname'])) {
	$message .= "<p>First Name: " . $_POST['fname'] . "</p>";
}
if (!empty($_POST['lname']) && isset($_POST['lname'])) {
	$message .= "<p>Last Name: " . $_POST['lname'] . "</p>";
}
if (!empty($_POST['email']) && isset($_POST['email'])) {
	$message .= "<p>Email: " . $_POST['email'] . "</p>";
}
if (!empty($_POST['feedback']) && isset($_POST['feedback'])) {
	$message .= "<p>Feedback Message: " . $_POST['feedback'] . "</p>";
}
$message .= "<p>Thanks</p>";
$message .= "</div>";

$headers = "From:" . $from . "\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-type:text/html;charset=UTF-8\r\n";

$res = mail($to, $subject, $message, $headers);

if ($res == true) {
	echo "Message sent successfully...";
} else {
	echo "Message could not be sent...";
}

// print_r($_POST['fname']);
// print_r($_POST['lname']);
// print_r($_POST['email']);
// print_r($_POST['feedback']);
// print_r($res);

exit;
