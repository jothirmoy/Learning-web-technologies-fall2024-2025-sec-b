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
                        <input type="checkbox" name="degree[]" value="SSC" <?php if (isset($_POST['degree']) && in_array('SSC', $_POST['degree'])) echo 'checked'; ?>> SSC
                        <input type="checkbox" name="degree[]" value="HSC" <?php if (isset($_POST['degree']) && in_array('HSC', $_POST['degree'])) echo 'checked'; ?>> HSC
                        <input type="checkbox" name="degree[]" value="BSc" <?php if (isset($_POST['degree']) && in_array('BSc', $_POST['degree'])) echo 'checked'; ?>> BSc
                        <input type="checkbox" name="degree[]" value="Msc" <?php if (isset($_POST['degree']) && in_array('Msc', $_POST['degree'])) echo 'checked'; ?>> Msc
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
        echo "Selected Degrees: " . implode(", ", $degrees);
    }
    ?>
</body>
</html>
