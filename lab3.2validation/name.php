<!DOCTYPE html>
<html>
<head>
    <title>Form Validation</title>
    <style>
        fieldset {
            display: inline-block;
        }
        legend {
            font-weight: bold;
            margin-bottom: 10px;
        }
        .error {
            color: red;
        }
    </style>
</head>
<body>
    <form method="post" action="">
        <fieldset>
            <legend>NAME</legend>
            <input type="text" id="name" name="name" value="<?php echo isset($_POST['name']) ? htmlspecialchars($_POST['name']) : ''; ?>">
            <br><br>
            <hr> <!-- Adding a horizontal line -->
            <input type="submit" value="Submit">
        </fieldset>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST['name'];
        $errors = [];

        if (empty($name)) {
            $errors[] = "Name cannot be empty.";
        }

        if (str_word_count($name) < 2) {
            $errors[] = "Name must contain at least two words.";
        }

        if (!preg_match("/^[a-zA-Z]/", $name)) {
            $errors[] = "Name must start with a letter.";
        }

        if (!preg_match("/^[a-zA-Z .-]+$/", $name)) {
            $errors[] = "Name can contain a-z, A-Z, period, dash only.";
        }

        if (empty($errors)) {
            echo "Name: " . htmlspecialchars($name);
        } else {
            echo '<div class="error">';
            foreach ($errors as $error) {
                echo $error . "<br>";
            }
            echo '</div>';
        }
    }
    ?>
</body>
</html>
