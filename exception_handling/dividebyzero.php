<?php 
function divide($num, $divident) {
    if($divident == 0) {
    throw new Exception("Number cannnot be divided by zero");
   }
    return $num / $divident;
}

try {
    $result = divide(6,3);
    echo "The result is: " . $result . "\n";
    $error_result = divide(6,0);
    echo $error_result . "\n";
} catch(Exception $e) {
    echo "Error is : " . $e->getMessage() . "\n";
}
?>
