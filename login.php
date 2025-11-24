<?php

if (!isset($_POST['email'])) {
    header("Location: ../index.html");
    exit();
}

$fullname = $_POST['fullname'];
$email = $_POST['email'];

// You can save to a database if you want
file_put_contents("logins.txt", "$fullname - $email\n", FILE_APPEND);

// Redirect after login
header("Location: ../success.html");
exit();

?>
