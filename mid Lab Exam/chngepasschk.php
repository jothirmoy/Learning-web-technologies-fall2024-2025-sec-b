<?php
session_start();


if (!isset($_SESSION['logged_in_user'])) {
    header('Location: login.html'); 
    exit();
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $current_password = $_POST['password'];
    $new_password = $_POST['new_password'];
    $retype_new_password = $_POST['retype_new_password'];

    
    $userid = $_SESSION['logged_in_user'];

    
    if (isset($_SESSION['users'][$userid])) {
        $user = $_SESSION['users'][$userid];

        
        if ($user['password'] === $current_password) {
            
            if ($new_password === $retype_new_password) {
               
                $_SESSION['users'][$userid]['password'] = $new_password;

                
                echo "Password changed successfully!<br>";
                header('Location: home.php'); 
                exit();
            } else {
                
                echo "New password and retype password do not match!<br>";
            }
        } else {
          
            echo "Incorrect current password!<br>";
        }
    } else {
        
        echo "User not found! Please log in again.<br>";
    }
} else {
   
    header('Location: change_password.html');
    exit();
}
?>