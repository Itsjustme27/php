<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $a = 5;       // Integer
        $b = 5.34;    // Float
        $c = "hello"; // String
        $d = true;    // Boolean
        $e = NULL;    // NULL
        
        $a = (string) $a;
        $b = (int) $b;
        $c = (string) $c;
        $d = (int) $d;
        $e = (string) $e;
        

        var_dump($a);
        var_dump($b);
        var_dump($c);
        var_dump($d);
        var_dump($e);

        // Constants
        const API_ENDPOINT = "https://api.org/";
        const ERROR_CODE_401 = 401;
        
        // NULL Coalescing
        $var1 = NULL;
        $var2 = 2;

        $result = $var1 ?? 5;
        $result2 = $var2 ?? 5;
        echo $result;
        echo $result2;

    ?>
</body>
</html>