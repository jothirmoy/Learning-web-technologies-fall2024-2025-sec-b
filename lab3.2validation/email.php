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
        hr {
            width: 100%;
        }
        .error {
            color: red;
        }
    </style>
</head>
<body>
    <form method="post" action="">
        <fieldset>
            <legend>EMAIL</legend>
            <input type="text" id="email" name="email" value="<?php echo isset($_POST['email']) ? htmlspecialchars($_POST['email']) : ''; ?>">
            <br><br>
            <hr> <!-- Adding a horizontal line -->
            <input type="submit" value="Submit">
        </fieldset>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = $_POST['email'];
        $errors = [];

        if (empty($email)) {
            $errors[] = "Email cannot be empty.";
        }

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors[] = "Must be a valid email address (i.e anything@example.com).";
        }

        if (empty($errors)) {
            echo "Email: " . htmlspecialchars($email);
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
