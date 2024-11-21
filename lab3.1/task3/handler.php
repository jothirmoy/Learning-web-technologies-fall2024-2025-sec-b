<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $day = htmlspecialchars($_POST['day']);
    $month = htmlspecialchars($_POST['month']);
    $year = htmlspecialchars($_POST['year']);
    echo "Date of Birth: " . $day . "/" . $month . "/" . $year;
}
?>
