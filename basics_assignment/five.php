<?php
    $a = readline("Enter coefficient a: ");
    $b = readline("Enter coefficient b: ");
    $c = readline("Enter coefficient c: ");

    $discriminant = pow($b, 2) - 4 * $a * $c;

    if ($discriminant < 0) {
        echo "No real roots\n";
    } else {
        $r1 = (-$b + sqrt($discriminant)) / (2 * $a);
        $r2 = (-$b - sqrt($discriminant)) / (2 * $a);

        echo "Root 1: " . $r1 . "\n";
        echo "Root 2: " . $r2 . "\n";
    }
?>