<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $gender = htmlspecialchars($_POST['gender']);
    echo "Gender: " . $gender;
}
?>
