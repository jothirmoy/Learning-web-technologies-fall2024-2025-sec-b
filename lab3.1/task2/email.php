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
    <form method="post" action="handel.php">
        <fieldset>
            <legend>EMAIL</legend>
            <table>
                <tr>
                    <td>Email: </td>
                </tr>
                <tr>    
                    <td><input type="email" name="email" value="" /></td>
                </tr>
                <tr>
                    <td>
                        <br>
                        <hr>
                        <input type="submit" value="Submit" />
                    </td>
                </tr>
            </table>
        </fieldset>
    </form>
</body>
</html>
