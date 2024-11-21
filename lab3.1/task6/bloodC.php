<html lang="en">
<head>
    <title>HTML Form</title>
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
            <legend>BLOOD GROUP</legend>
            <table>
                <tr>
                    <td>Blood Group</td>
                    <td>
                        <select name="blood">
                            <option value="">Select</option>
                            <option value="A+" <?php if (isset($_POST['blood']) && $_POST['blood'] == 'A+') echo 'selected'; ?>>A+</option>
                            <option value="A-" <?php if (isset($_POST['blood']) && $_POST['blood'] == 'A-') echo 'selected'; ?>>A-</option>
                            <option value="B+" <?php if (isset($_POST['blood']) && $_POST['blood'] == 'B+') echo 'selected'; ?>>B+</option>
                            <option value="B-" <?php if (isset($_POST['blood']) && $_POST['blood'] == 'B-') echo 'selected'; ?>>B-</option>
                            <option value="O+" <?php if (isset($_POST['blood']) && $_POST['blood'] == 'O+') echo 'selected'; ?>>O+</option>
                            <option value="O-" <?php if (isset($_POST['blood']) && $_POST['blood'] == 'O-') echo 'selected'; ?>>O-</option>
                            <option value="AB+" <?php if (isset($_POST['blood']) && $_POST['blood'] == 'AB+') echo 'selected'; ?>>AB+</option>
                            <option value="AB-" <?php if (isset($_POST['blood']) && $_POST['blood'] == 'AB-') echo 'selected'; ?>>AB-</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>
                        <br>
                        <hr> <!-- Adding a horizontal line -->
                        <input type="submit" value="Submit">
                    </td>
                </tr>
            </table>
        </fieldset>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $blood = htmlspecialchars($_POST['blood']);
        echo "Blood Group: " . $blood;
    }
    ?>
</body>
</html>
