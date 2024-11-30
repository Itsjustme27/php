<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prime Numbers</title>
    <link rel="stylesheet" href="styles.css">
</head>

<div class="container">
    <h1>Prime Numbers!</h1>
    <form action="prime.php" method="post">
        <label for="number">Enter your number/limit: </label>
        <input type="text" name="number" id="number"><br>

        <input type="submit" value="Submit">
    </form>
</div>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $num = (int) $_POST['number'];

    echo 'The prime numbers up to ' . $num . ' are: <br>';
    for ($i = 2; $i <= $num; $i++) {
        $isPrime = true;

        for ($j = 2; $j <= sqrt($i); $j++) {
            if ($i % $j == 0) {
                $isPrime = false;
                break;
            }
        }

        if ($isPrime) {
            echo $i . '<br>';
        }
    }
}
?>

</body>

</html>