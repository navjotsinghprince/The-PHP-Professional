
<?php
$emailTo = "terminaterboyz@gmail.com";  //Receiver, separated by commas, can also send multiple email IDs.
$subject = "Test Mail";
$content = "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor";

$headers = [
	"MIME-Version: 1.0",
	"Content-type: text/plain; charsert=utf-8",
	"From: yoursetup@gmail.com",
	"Cc: first@gmail.com",      //Carbon Copy
	"Bcc: second@gmail.com"  //Blind Carbon Copy
];

$headers = implode("\r\n, $headers"); //convert array into string

if (mail($emailTo, $subject, $content, $headers)) {
	echo "email send";
} else {
	echo "email not send";
}

?>