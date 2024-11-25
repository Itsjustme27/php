<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leap Year</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Leap Year Or Not?!</h1>

        <form action="three.php" method="post">
            <label for="year">Enter the Year: </label>
            <input type="text" id="year" name="year"><br>

            <input type="submit" value="Submit">
        </form>
    </div>

    <?php 
        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            $year = htmlspecialchars($_POST['year']);

            if(($year%400 == 0 ) or ($year%4 == 0 and $year%100 != 0)) {
                echo $year. ' is a leap year!';
            } else {
                echo $year. ' is not a leap year!';
            }
        }

    ?>
</body>
</html>