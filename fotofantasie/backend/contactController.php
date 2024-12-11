<?php

$name = $_POST['name'];
$topic = $_POS['topic'];
$email = $_POST['email'];
$message = $_POST['message'];

file_put_contents('../contactverzoek.txt', $name . ", " . $topic . "," . $email . " - " . $message, FILE_APPEND);


$msg = "Bedankt voor uw bericht, we nemen zo spoedig mogelijk contact met u op!";
header("location: ../index.php?msg=$msg");