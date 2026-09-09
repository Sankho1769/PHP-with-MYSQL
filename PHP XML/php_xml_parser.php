<?php

$xml = simplexml_load_string('<?xml version="1.0"?>
<students>
    <student>
        <name>' . htmlspecialchars(readline("Enter student name: ")) . '</name>
        <age>' . (int)readline("Enter student age: ") . '</age>
    </student>
</students>');

echo "\nStudent Details:\n";
echo "Name: " . $xml->student->name . "\n";
echo "Age: " . $xml->student->age . "\n";

?>