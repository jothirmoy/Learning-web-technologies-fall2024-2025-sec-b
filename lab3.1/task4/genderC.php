<html lang="en">
<head>
    <title>HTML-FORM</title>
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
            <legend>Gender</legend>
            <table>
                <tr>
                    <td>
                        <input type="radio" name="gender" value="Male" <?php if (isset($_POST['gender']) && $_POST['gender'] == 'Male') echo 'checked'; ?>> Male  
                        <input type="radio" name="gender" value="Female" <?php if (isset($_POST['gender']) && $_POST['gender'] == 'Female') echo 'checked'; ?>> Female  
                        <input type="radio" name="gender" value="Other" <?php if (isset($_POST['gender']) && $_POST['gender'] == 'Other') echo 'checked'; ?>> Other
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
        $gender = htmlspecialchars($_POST['gender']);
        echo "Gender: " . $gender;
    }
    ?>
</body>
</html>
