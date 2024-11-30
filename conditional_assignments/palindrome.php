<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Palindrome or not</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <div class="container">
        <h1>Palindrome or not?!</h1>

        <form action="palindrome.php" method="post">
            <label for="number">Enter your number: </label>
            <input type="text" name="number" id="number">
            <br>
            <input type="submit" value="Submit">
        </form>
    </div>

    <?php
     if ($_SERVER['REQUEST_METHOD'] == 'POST') {
         $num = htmlspecialchars($_POST['number']); 
 
         // Validate that input is numeric
         if (!is_numeric($num)) {
             echo "<p>Please enter a valid number.</p>";
         } else {
             $temp = (int)$num; 
             $rev = 0; 
             $original = $temp;
 
             // Reverse the number
             while ($temp > 0) {
                 $rem = $temp % 10; 
                 $rev = $rev * 10 + $rem; 
                 $temp = (int)($temp / 10); 
             }
 
             // Check if the number is a palindrome
             if ($original == $rev) {
                 echo "<p>$original is a palindrome number.</p>";
             } else {
                 echo "<p>$original is not a palindrome number.</p>";
             }
         }
     }
     ?>
</body>

</html>