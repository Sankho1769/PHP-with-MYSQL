<?php

// 1. WHILE LOOP

echo "<h2>1. WHILE Loop</h2>";

$i = 1;

while ($i <= 5) {
    echo "Number: $i<br>";
    $i++;
}


// 2. DO...WHILE LOOP

echo "<h2>2. DO...WHILE Loop</h2>";

$i = 1;

do {
    echo "Number: $i<br>";
    $i++;
} while ($i <= 5);


// 3. FOR LOOP

echo "<h2>3. FOR Loop</h2>";

for ($i = 1; $i <= 5; $i++) {
    echo "Number: $i<br>";
}


// 4. FOREACH LOOP

echo "<h2>4. FOREACH Loop</h2>";

$subjects = ["Java", "PHP", "MySQL", "DSA"];

foreach ($subjects as $subject) {
    echo "Subject: $subject<br>";
}


// 5. FOREACH WITH KEY AND VALUE

echo "<h2>5. FOREACH Key and Value</h2>";

$student = [
    "name" => "Shankho",
    "age" => 20,
    "course" => "BCA"
];

foreach ($student as $key => $value) {
    echo "$key : $value<br>";
}


// 6. BREAK

echo "<h2>6. BREAK</h2>";

for ($i = 1; $i <= 10; $i++) {

    if ($i == 6) {
        break;
    }

    echo "$i<br>";
}


// 7. CONTINUE

echo "<h2>7. CONTINUE</h2>";

for ($i = 1; $i <= 10; $i++) {

    if ($i == 5) {
        continue;
    }

    echo "$i<br>";
}


// 8. NESTED LOOP

echo "<h2>8. Nested Loop</h2>";

for ($i = 1; $i <= 3; $i++) {

    for ($j = 1; $j <= 3; $j++) {

        echo "i = $i, j = $j<br>";
    }
}


// 9. MULTIPLICATION TABLE

echo "<h2>9. Multiplication Table</h2>";

$number = 5;

for ($i = 1; $i <= 10; $i++) {

    echo "$number x $i = " . ($number * $i) . "<br>";
}


// 10. SUM USING LOOP

echo "<h2>10. Sum Using Loop</h2>";

$sum = 0;

for ($i = 1; $i <= 10; $i++) {
    $sum += $i;
}

echo "Sum of 1 to 10 = $sum<br>";


// FINAL EXAMPLE

echo "<h2>Final Example</h2>";

$marks = [85, 90, 78, 92, 88];

$total = 0;

foreach ($marks as $mark) {
    $total += $mark;
}

$average = $total / count($marks);

echo "Total: $total<br>";
echo "Average: $average<br>";

?>