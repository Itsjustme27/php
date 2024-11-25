<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Electricity Bill</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Electricity Bill Calculator</h1>
        
        <form action="six.php" method="post">
            <label for="units">Enter your units: </label>
            <input type="text" id="units" name="units" required><br>

            <input type="submit" value="Submit">
        </form>
    </div>

    <?php 
        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            $units = htmlspecialchars($_POST['units']);
            if($units <= 20) {
                $totalBill = 30;
            } else if($units <= 50) {
                $totalBill = 30 + ($units - 20) * 12;
            } else if($units <= 100) {
                $totalBill = 30 + 30 * 12 + ($units - 50) * 15;
            } else {
                $totalBill = 30 + 30 * 12 + 50 * 15 + ($units - 100) * 20;
            }

            echo 'For '.$units.' units,'.'Your bill is Rs. '.$totalBill;
        }

    ?>
</body>
</html>