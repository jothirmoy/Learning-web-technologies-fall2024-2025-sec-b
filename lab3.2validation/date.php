<html>
<head>
    <title>Date Validation Form</title>
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
            <legend>DATE</legend>
            <table>
                <tr>
                    <td>
                    <label for="day">dd &nbsp;&nbsp;&nbsp;&nbsp;/&nbsp;</label>
                    <label for="month">mm &nbsp;&nbsp;&nbsp;&nbsp;/&nbsp;&nbsp;&nbsp;&nbsp;</label>
                    <label for="year">yyyy &nbsp;&nbsp;</label>
                    </td>
                </tr>
                <tr>
                    <td>
                    <input type="text" id="day" name="day" value="<?php echo isset($_POST['day']) ? htmlspecialchars($_POST['day']) : ''; ?>">&nbsp;/
                    <input type="text" id="month" name="month" value="<?php echo isset($_POST['month']) ? htmlspecialchars($_POST['month']) : ''; ?>">&nbsp;/
                    <input type="text" id="year" name="year" value="<?php echo isset($_POST['year']) ? htmlspecialchars($_POST['year']) : ''; ?>">
                    </td>
                </tr>
            </table>
            
            <hr> <!-- Adding a horizontal line -->
            <input type="submit" value="Submit">
        </fieldset>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $day = $_POST['day'];
        $month = $_POST['month'];
        $year = $_POST['year'];
        $errors = [];

        if (empty($day) || empty($month) || empty($year)) {
            $errors[] = "All fields are required.";
        }

        if (!is_numeric($day) || !is_numeric($month) || !is_numeric($year)) {
            $errors[] = "All fields must be valid numbers.";
        } else {
            
            if ($day < 1 || $day > 31) {
                $errors[] = "Day must be between 1 and 31.";
            }
            if ($month < 1 || $month > 12) {
                $errors[] = "Month must be between 1 and 12.";
            }
            if ($year < 1953 || $year > 2024) {
                $errors[] = "Year must be between 1953 and 2024.";
            }
        }

        if (empty($errors)) {
            echo "Date: " . htmlspecialchars($day) . "-" . htmlspecialchars($month) . "-" . htmlspecialchars($year);
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
