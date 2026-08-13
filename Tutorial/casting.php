<?php

// ============================================
// PHP TYPE CASTING
// ============================================

echo "<h2>PHP Type Casting</h2>";


// ============================================
// 1. STRING TO INTEGER
// ============================================

$value = "100";

$number = (int)$value;

echo "String to Integer:<br>";
var_dump($value);
var_dump($number);

echo "<br><br>";


// ============================================
// 2. FLOAT TO INTEGER
// ============================================

$value = 99.99;

$number = (int)$value;

echo "Float to Integer:<br>";
var_dump($value);
var_dump($number);

echo "<br><br>";


// ============================================
// 3. INTEGER TO FLOAT
// ============================================

$value = 50;

$number = (float)$value;

echo "Integer to Float:<br>";
var_dump($value);
var_dump($number);

echo "<br><br>";


// ============================================
// 4. INTEGER TO STRING
// ============================================

$value = 100;

$text = (string)$value;

echo "Integer to String:<br>";
var_dump($value);
var_dump($text);

echo "<br><br>";


// ============================================
// 5. STRING TO FLOAT
// ============================================

$value = "25.75";

$number = (float)$value;

echo "String to Float:<br>";
var_dump($value);
var_dump($number);

echo "<br><br>";


// ============================================
// 6. BOOLEAN CASTING
// ============================================

$value = 1;

$result = (bool)$value;

echo "Integer to Boolean:<br>";
var_dump($value);
var_dump($result);

echo "<br><br>";


// ============================================
// 7. BOOLEAN TO INTEGER
// ============================================

$value = true;

$number = (int)$value;

echo "Boolean to Integer:<br>";
var_dump($value);
var_dump($number);

echo "<br><br>";


// ============================================
// 8. STRING TO BOOLEAN
// ============================================

$value = "Hello";

$result = (bool)$value;

echo "String to Boolean:<br>";
var_dump($value);
var_dump($result);

echo "<br><br>";


// ============================================
// 9. CASTING USING SETTYPE()
// ============================================

$value = "500";

echo "Before settype():<br>";
var_dump($value);

settype($value, "integer");

echo "After settype():<br>";
var_dump($value);

echo "<br><br>";


// ============================================
// 10. CHECKING TYPE AFTER CASTING
// ============================================

$value = "123";

$value = (int)$value;

echo "Final Type:<br>";
var_dump($value);

?>