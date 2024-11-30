<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navi | File navigator</title>
</head>
<body>
    <div class="container">
        <form method="get">
            <input type="hidden" name="step" value="<?php echo $step - 1; ?>"<?php if($step <= 1) echo 'disabled'; ?>>
            <button type="submit" <?php if ($step <= 1) echo 'disabled'; ?>>Previous</button>
        </form>

        <form method="get">
            <input type="hidden" name="step" value="<?php echo $step + 1; ?>" <?php if ($step >= 6) echo 'disabled'; ?>>
            <button type="submit" <?php if ($step >= 6) echo 'disabled'; ?>>Next</button>
        </form>
    </div>

    <?php
        $step = isset($_GET['step']) ? (int)$_GET['step'] : 1;

        switch($step) {
            case 1:
                require 'one.php';
                break;
            case 2:
                require 'two.php';
                break;
            case 3:
                require 'three.php';
                break;
            case 4:
                require 'four.php';
                break;
            case 5:
                require 'five.php';
                break;
            case 6:
                require 'six.php';
                break;
            default:
                require 'Invalid step';
        }
    ?>
</body>
</html>