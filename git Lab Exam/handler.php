<?php
session_start();

$valid_email = "user@gmail.com";
$valid_password = "123";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];
    echo "email: " . $email;
    echo "password: " . $password;


    if ($email == $valid_email && $password == $valid_password) {
        $_SESSION['email'] = $email;
        header("Location: home.html");
        exit();
    } else {
        echo "Invalid email or password.";
    }
}
?>
