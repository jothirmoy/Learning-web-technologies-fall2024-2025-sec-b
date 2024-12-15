<?php
session_start();

$valid_UserId = "user@gmail.com";
$valid_password = "123";

$valid_Admin = "admin@gmail.com";
$valid_Adminpassword = "123";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $UserId = $_POST['UserId'];
    $password = $_POST['password'];
    echo "UserId: " . $UserId;
    echo "password: " . $password;

    if ($UserId == $valid_UserId && $password == $valid_password) {
        $_SESSION['UserId'] = $UserId;
        header("Location: home.html");
        exit();
    }
    if ($UserId == $valid_Admin && $password == $valid_Adminpassword) {
        $_SESSION['UserId'] = $UserId;
        header("Location: home2.html");
        exit();
    }  
    else {
        echo "Invalid email or password.";
    }
}
?>
