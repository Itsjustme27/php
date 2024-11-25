<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Positive or Negative?!!</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Positive or Negative?!!</h1>
        <form action="four.php" method="post">
            <label for="number">Enter a number: </label>
            <input type="text" id="number" name="number"><br>

            <input type="submit" value="Submit">
        </form>
    </div>

    <?php 
        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            $num = htmlspecialchars($_POST['number']);

            if($num > 0) {
                echo $num.' is a positive number';
            } else if($num < 0) {
                echo $num.' is a negative number';
            } else {
                echo $num.' is neither positive nor negative';
            }
        }

    ?>
</body>
</html>