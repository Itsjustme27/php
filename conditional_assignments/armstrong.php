<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Armstrong Number Checker</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Armstrong or not?!</h1>
    <form action="" method="post">
        <label for="number">Enter a number:</label>
        <input type="text" name="number" id="number"><br>
        <button type="submit">Check</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $num = (int)$_POST['number'];
        $sum = 0;
        $temp = $num;

        while ($num != 0) {
            $rem = $num % 10;
            $sum += pow($rem, 3);
            $num = (int)($num / 10);
        }

        if ($temp == $sum) {
            echo $temp . " is an Armstrong number.";
        } else {
            echo $temp . " is not an Armstrong number.";
        }
    }
    ?>
</body>
</html>