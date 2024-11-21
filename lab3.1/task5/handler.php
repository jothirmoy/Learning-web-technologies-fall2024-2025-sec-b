<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $degrees = isset($_POST['degree']) ? $_POST['degree'] : [];
    echo "Selected Degrees: " . implode(", ", $degrees);
}
?>
