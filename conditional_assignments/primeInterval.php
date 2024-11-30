<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prime numbers in an Interval</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Prime numbers in an Interval</h1>
        <form action="primeInterval.php" method="post">
            <label for="x">Start: </label>
            <input type="number" name="x" id="x" required><br>
            <label for="y">End: </label>
            <input type="number" name="y" id="y" required><br>

            <input type="submit" value="Submit">
        </form>

        <?php
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $x = $_POST['x'];
                $y = $_POST['y'];

                if ($x > $y) {
                    echo "Invalid range. Please make sure the start number is less than the end number.";
                } else {
                    echo "The prime numbers from $x to $y are:<br>";


                    for ($i = $x; $i <= $y; $i++) {
                        if ($i <= 1) {
                            continue; 
                        }

                        $isPrime = true;
                        
                        for ($j = 2; $j <= sqrt($i); $j++) {
                            if ($i % $j == 0) {
                                $isPrime = false;
                                break;
                            }
                        }

                        if ($isPrime) {
                            echo $i . "<br>";
                        }
                    }
                }
            }
        ?>
    </div>
</body>
</html>
