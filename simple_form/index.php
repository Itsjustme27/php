<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Welcome to my PHP web form</h1>

    <form action="index.php" method="post">
        <label for="name">Enter name:</label>
        <input type="text" id="name" name="name" required>
        <br>
        <label for="radius">Enter Radius: </label>
        <input type="text" id="radius" name="radius" required>
        <br>
        <input type="submit" value="Submit">

    </form>

    <?php
    // const PI = 3.1416;
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $name = htmlspecialchars($_POST['name']);
        echo "<p>Hello, ".$name."!</p>"; 

        $radius = htmlspecialchars($_POST['radius']);
        $areaCircle = pi() * pow($radius, 2);
        echo "The area is " .$areaCircle. ".";
    }

    ?>
    <script src="app.js"></script>
</body>
</html>