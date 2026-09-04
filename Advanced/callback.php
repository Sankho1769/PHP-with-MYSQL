<?php

function greet($name)
{
    echo "Hello, " . $name;
}

function processUser($name, $callback)
{
    $callback($name);
}

processUser("Shankho", "greet");

?>