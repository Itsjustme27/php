<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Largest Prime factor</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Largest Prime Factor</h1>
        <form action="largestPrime.php" method="post">
            <label for="number">Enter your number: </label>
            <input type="text" name="number" id="number">

            <input type="submit" value="Submit">
        </form>

        <?php
            if($_SERVER['REQUEST_METHOD'] == 'POST') {
                $num = $_POST['number'];
                $arr = [];
                echo "Factors of " . $num . ":<br>";
                for($i = 1; $i <= $num; $i++) {
                    $isPrime = true;
                    if($num % $i == 0) {
                        echo $i . '<br>';
                        array_push($arr, $i);
                    }
                }
                echo "Prime Numbers: <br>";

                $primeArr = [];
                foreach ($arr as $ele) {
                    if ($ele <= 1) {
                        continue;
                    }

                    $isPrime = true;
                    for ($i = 2; $i <= sqrt($ele); $i++) {
                        if ($ele % $i == 0) {
                            $isPrime = false; 
                            break; 
                        }
                    }
                    if ($isPrime) {
                        echo $ele . "<br>";
                        array_push($primeArr, $ele);
                    }
                }
                $largestPrime = max($primeArr);
                echo "The Largest Prime factor is: " . $largestPrime . "<br>";
            }
        ?>
    </div>
</body>
</html>