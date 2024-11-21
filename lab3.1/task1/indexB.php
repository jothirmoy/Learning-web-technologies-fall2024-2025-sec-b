<html>
<head>
    <title>Form Submission</title>
</head>
<body>
    <form method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name">
        <input type="submit" value="Submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = htmlspecialchars($_POST['name']);
        echo "Name: " . $name;
    }
    ?>
</body>
</html>
