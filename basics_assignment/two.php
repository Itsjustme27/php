<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Day chooser</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Day chooser</h1>

        <form action="two.php" method="post">
            <label for="day">Enter a number: </label>
            <input type="text" name="day" id="day"><br>

            <input type="submit" value="Submit">
        </form>
    </div>

    <?php
        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            $day = htmlspecialchars($_POST['day']);

            switch($day) {
                case 1:
                    echo 'Monday';
                    break;
                case 2:
                    echo 'Tuesday';
                    break;
                case 3:
                    echo 'Wednesday';
                    break;
                case 4:
                    echo 'Thursday';
                    break;
                case 5:
                    echo 'Friday';
                    break;
                case 6:
                    echo 'Saturday';
                    break;
                case 7:
                    echo 'Sunday';
                    break;
                default:
                    echo 'Invalid Input! Try again.';
                    break;
            }
        }
    ?>
</body>
</html>