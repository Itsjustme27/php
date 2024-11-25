<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Roots of Quadratic EQN</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Roots of Quadratic EQN</h1>

        <form action="five.php" method="post">

            <label for="a">Enter coefficient a: </label>
            <input type="text" name="a" id="a" required><br>

            <label for="b">Enter coefficient b: </label>
            <input type="text" name="b" id="b" required><br>

            <label for="c">Enter coefficient c: </label>
            <input type="text" name="c" id="c" required><br>

            <input type="submit" value="Submit">
        </form>



    </div>

    <?php 
        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            $a = htmlspecialchars($_POST['a']);
            $b = htmlspecialchars($_POST['b']);
            $c = htmlspecialchars($_POST['c']);

            $discriminant = sqrt(pow($b, 2) - 4*$a*$c);
            if($discriminant < 0) {
                echo "No real roots";
            } else {
                $root1 = (-$b + sqrt($discriminant) / 2 * $a);
                $root2 = (-$b - sqrt($discriminant) / 2* $a);
            }

            echo "Root 1: ".$root1." Root 2: ".$root2."\n";
        }
    ?>
</body>
</html>