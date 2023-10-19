<?php
//vong lap
/**
 * gom:
 * For loop; foreach
 * While, do while
 */

$sum = 0;
for ($i = 0; $i < 10; $i++) {
    $sum += $i;
}

$i = 0;
while ($i < 5) {
    $sum += $i;
    $i++;
}

$fruits = ['a', 'b', 'c'];
$sum2 = "";
for ($i = 0; $i < count($fruits); $i++) {
    $sum2 .= $fruits[$i];
}

$sum2 = "";

// better for array
foreach ($fruits as $fruit) {
    $sum2 .= $fruit;
}

// foreach co index
$sum3 = "";
foreach ($fruits as $index => $fruit) {
    $sum3 .= "$index - $fruit, ";
}

$sum4 = "";
$person = [
    'fullName' => 'Poo',
    'add' => 'Thai Nguyen'
];

foreach ($person as $key => $value) {
    $sum4 .= ", $key - $value";
}

echo $sum4;
