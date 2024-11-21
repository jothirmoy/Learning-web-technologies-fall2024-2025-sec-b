<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $blood = htmlspecialchars($_POST['blood']);
    echo "Blood Group: " . $blood;
}
?>
