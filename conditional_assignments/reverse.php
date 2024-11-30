<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reversi</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Reverse a Number</h1>
        <form action="reverse.php" method="post">
            <label for="number">Enter your number: </label>
            <input type="text" name="number" id="number"> <br>
            
            <input type="submit" value="Submit">
        </form>
    </div>

    <?php
        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            $num = $_POST['number'];
            $temp = $num;
            $rev = 0;
            while($num != 0) {
                $rem = $num % 10;
                $rev = $rev * 10 + $rem;
                $num = (int) ($num / 10);
            }

            echo 'The reverse of ' . $temp . ' is ' . $rev;
        }
    ?>
</body>
</html>