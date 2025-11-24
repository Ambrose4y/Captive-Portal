<?php

$users = file('users.txt', FILE_IGNORE_NEW_LINES );

$username = $_POST['username'];
$password = $_POST['password'];

$valid = false;

foreach ($users as $entry) {
    list($user, $pass) = explode(',', $entry);
    if ($username === trim($user) && $password === trim($pass)) {
        $valid = true;
        break;
    }
}
if ($valid) {
    header('Location: success.html');
    exit();
} else {
    echo "Invalid Credential.";
    echo '<br><a href="index.html">Please try again</a>';
}
