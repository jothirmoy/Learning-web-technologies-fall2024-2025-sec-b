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
    <form method="post" action="handler.php">
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
</body>
</html>
