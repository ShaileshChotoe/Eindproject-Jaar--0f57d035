<?php

session_start();


$email = $_POST['email'];

$filename = "../levels/level8.html";
$naam = $_SESSION['name'];
$to      = $email;
$subject = 'Jouw eigen website!';
$message = '<html>
Beste ' . $naam . ',' .'
<br><br>
<p>Hierbij sturen wij de code van jouw eigen website!</p>
<p>Vond je dit nou erg leuk? Meld je dan snel aan bij de Bit-Academy!</p>
</html>';
$nmessage .= "Content-Transfer-Encoding: base64\r\n";
$nmessage .= "Content-Disposition: attachment; filename=\"".$filename."\"\r\n\r\n";
$message .= "Content-Type: application/octet-stream; name=\"".$filename."\"\r\n";
// To send HTML mail, the Content-type header must be set
$headers[] = 'MIME-Version: 1.0';
$headers[] = 'Content-type: text/html; charset=iso-8859-1';

// Additional headers
$headers[] = 'From: Bit-Academy <bit-academy@wearebit.com>';

// Mail it
mail($to, $subject, $message, implode("\r\n", $headers));
echo "test";
?>