<?php

function divide($a, $b)
{
    if ($b == 0) {
        throw new Exception("Cannot divide by zero.");
    }
    return $a / $b;
}

try {
    echo "Result: " . divide(10, 0);
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}

?>