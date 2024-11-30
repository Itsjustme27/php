<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>looping even and odd</h1>
    </div>
    <?php
        for($i = 0; $i <= 50 ; $i++) {
            if($i%2 == 0) {
                echo "Even: ".$i."<br>"."<hr>";
            } else {
                echo "Odd: ".$i."\t";
            }
        }
    ?>
</body>
</html>