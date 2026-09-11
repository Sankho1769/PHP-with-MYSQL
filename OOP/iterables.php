<?php

$input = readline("Enter numbers separated by spaces: ");

$numbers = array_map('intval', preg_split('/\s+/', trim($input)));

function displayNumbers(iterable $data)
{
    echo "\nNumbers:\n";

    foreach ($data as $number) {
        echo $number . "\n";
    }
}

displayNumbers($numbers);

?>