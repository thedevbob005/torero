<?php
if(!empty($_POST["send"])) {
	$name = $_POST["name"] . " " . $_POST["surname"];
	$email = $_POST["email"];
    $subject = "Website Contact";
    $content = "Phone No. : " . $_POST["phone"];
    if (!empty($_POST["message"])) {
        $content = $content . "\r\n\r\nMessage : " . $_POST["message"];
    }

    $toEmail = "info@torerocorp.com";
    if ($_POST["about"] == "1") {
        $toEmail = "yashgupta@torerocorp.com";
    }

	$mailHeaders = "From: " . $name . "<". $email .">\r\n";
	if(mail($toEmail, $subject, $content, $mailHeaders)) {
	    $message = "Your contact information is received successfully.";
	    $type = "success";
	}
}
?>