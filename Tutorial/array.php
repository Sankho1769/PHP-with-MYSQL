<?php

// 1. INDEXED ARRAY

echo "<h2>1. Indexed Array</h2>";

$subjects = ["Java", "PHP", "MySQL", "DSA"];

echo $subjects[0] . "<br>";
echo $subjects[1] . "<br>";
echo $subjects[2] . "<br>";
echo $subjects[3] . "<br>";


// 2. CHANGE ARRAY VALUE

echo "<h2>2. Change Array Value</h2>";

$subjects[1] = "Spring Boot";

echo $subjects[1] . "<br>";


// 3. ADD VALUE TO ARRAY

echo "<h2>3. Add Value</h2>";

$subjects[] = "Git";

print_r($subjects);

echo "<br>";


// 4. COUNT ARRAY
echo "<h2>4. Count Array</h2>";

echo "Number of subjects: " . count($subjects) . "<br>";


// 5. FOREACH LOOP

echo "<h2>5. Foreach Loop</h2>";

foreach ($subjects as $subject) {
    echo $subject . "<br>";
}


// 6. ASSOCIATIVE ARRAY

echo "<h2>6. Associative Array</h2>";

$student = [
    "name" => "Shankho",
    "age" => 20,
    "course" => "BCA",
    "college" => "BGC"
];

echo "Name: " . $student["name"] . "<br>";
echo "Age: " . $student["age"] . "<br>";
echo "Course: " . $student["course"] . "<br>";
echo "College: " . $student["college"] . "<br>";


// 7. FOREACH WITH KEY AND VALUE

echo "<h2>7. Key and Value</h2>";

foreach ($student as $key => $value) {
    echo "$key : $value<br>";
}


// 8. MULTIDIMENSIONAL ARRAY

echo "<h2>8. Multidimensional Array</h2>";

$students = [

    [
        "name" => "Shankho",
        "age" => 20,
        "course" => "BCA"
    ],

    [
        "name" => "Rahul",
        "age" => 21,
        "course" => "BCA"
    ],

    [
        "name" => "Amit",
        "age" => 20,
        "course" => "BCA"
    ]

];

echo $students[0]["name"] . "<br>";
echo $students[1]["name"] . "<br>";
echo $students[2]["name"] . "<br>";


// 9. LOOP THROUGH MULTIDIMENSIONAL ARRAY

echo "<h2>9. Multidimensional Loop</h2>";

foreach ($students as $student) {

    echo "Name: " . $student["name"] . "<br>";
    echo "Age: " . $student["age"] . "<br>";
    echo "Course: " . $student["course"] . "<br>";

    echo "<hr>";
}


// 10. ARRAY FUNCTIONS

echo "<h2>10. Array Functions</h2>";

$numbers = [10, 20, 30, 40, 50];


// Add at end
array_push($numbers, 60);

echo "After array_push(): ";
print_r($numbers);

echo "<br>";


// Remove from end
array_pop($numbers);

echo "After array_pop(): ";
print_r($numbers);

echo "<br>";


// Add at beginning
array_unshift($numbers, 5);

echo "After array_unshift(): ";
print_r($numbers);

echo "<br>";


// Remove from beginning
array_shift($numbers);

echo "After array_shift(): ";
print_r($numbers);

echo "<br>";


// 11. SORTING ARRAY


echo "<h2>11. Sorting</h2>";

$numbers = [50, 10, 40, 20, 30];

sort($numbers);

echo "Ascending: ";
print_r($numbers);

echo "<br>";

rsort($numbers);

echo "Descending: ";
print_r($numbers);

echo "<br>";


// 12. SEARCH IN ARRAY

echo "<h2>12. Search</h2>";

$subjects = ["Java", "PHP", "MySQL", "DSA"];

if (in_array("PHP", $subjects)) {
    echo "PHP found in array.";
} else {
    echo "PHP not found.";
}

echo "<br>";


// 13. ARRAY KEY SEARCH

echo "<h2>13. Array Key Search</h2>";

$student = [
    "name" => "Shankho",
    "age" => 20,
    "course" => "BCA"
];

if (array_key_exists("age", $student)) {
    echo "Age key exists.";
}

echo "<br>";


// 14. ARRAY REVERSE

echo "<h2>14. Reverse Array</h2>";

$numbers = [10, 20, 30, 40, 50];

$reversed = array_reverse($numbers);

print_r($reversed);

echo "<br>";


// 15. ARRAY MERGE

echo "<h2>15. Merge Arrays</h2>";

$array1 = ["Java", "PHP"];
$array2 = ["MySQL", "DSA"];

$merged = array_merge($array1, $array2);

print_r($merged);

echo "<br>";


// 16. REMOVE ARRAY ELEMENT

echo "<h2>16. Remove Element</h2>";

$subjects = ["Java", "PHP", "MySQL", "DSA"];

unset($subjects[1]);

print_r($subjects);

echo "<br>";


// 17. ARRAY UNIQUE

echo "<h2>17. Remove Duplicates</h2>";

$numbers = [10, 20, 10, 30, 20, 40];

$uniqueNumbers = array_unique($numbers);

print_r($uniqueNumbers);

echo "<br>";


// 18. ARRAY MAP

echo "<h2>18. Array Map</h2>";

$numbers = [1, 2, 3, 4, 5];

$squares = array_map(function ($number) {

    return $number * $number;

}, $numbers);

print_r($squares);

echo "<br>";


// 19. ARRAY FILTER

echo "<h2>19. Array Filter</h2>";

$numbers = [10, 15, 20, 25, 30];

$evenNumbers = array_filter($numbers, function ($number) {

    return $number % 2 == 0;

});

print_r($evenNumbers);

echo "<br>";


// 20. ARRAY REDUCE

echo "<h2>20. Array Reduce</h2>";

$numbers = [10, 20, 30, 40];

$total = array_reduce($numbers, function ($carry, $number) {

    return $carry + $number;

}, 0);

echo "Total: $total<br>";


// FINAL EXAMPLE

echo "<h2>Final Example</h2>";

$marks = [
    "Java" => 85,
    "PHP" => 90,
    "MySQL" => 80,
    "DSA" => 95
];

$total = array_sum($marks);

$average = $total / count($marks);

echo "Total Marks: $total<br>";
echo "Average Marks: $average<br>";

?>