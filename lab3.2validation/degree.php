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
            <legend>DEGREE</legend>
            <table>
                <tr>
                    <td>
                        <input type="checkbox" name="degree[]" value="SSC"> SSC
                        <input type="checkbox" name="degree[]" value="HSC"> HSC
                        <input type="checkbox" name="degree[]" value="BSc"> BSc
                        <input type="checkbox" name="degree[]" value="Msc"> Msc
                    </td>
                </tr>
                <tr>
                    <td>
                    <hr> <!-- Adding a horizontal line -->
                        <input type="submit" value="Submit">
                    </td>
                </tr>
            </table>
        </fieldset>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $degrees = isset($_POST['degree']) ? $_POST['degree'] : [];
        $errors = [];

        if (count($degrees) < 2) {
            $errors[] = "At least two degrees must be selected.";
        }

        if (empty($errors)) {
            echo "Selected Degrees: " . implode(", ", $degrees);
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
