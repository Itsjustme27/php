<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Even or Odd</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <h1>Even or Odd</h1>

    <form action="one.php" method="post">
        <label for="number">Enter a Number: </label>
        <input type="text" name="number" id="number" required><br>

        <input type="submit" value="Submit">
    </form>

    <?php
        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            $number = htmlspecialchars($_POST['number']);

            if($number%2 == 0) {
                echo $number.' is Even';
            } else {
                echo $number.' is Odd';
            }
        }
    ?>
</body>
</html>