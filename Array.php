<?php
// ARRAY
echo "We talk about Array <br />";

/* $array_numbers = [1, 3, 3, 5];
var_dump($array_numbers);
echo "<br />";
print_r($array_numbers); */
/* echo "<br />";

$fruits = ['pineapple', 'melon', 'apple'];
echo $fruits[0]; */

// thiet dat theo index: key-value

$colors = [
    3 => 'red',
    5 => 'green',
    7 => 'yellow'
];
print_r($colors[7]);
echo "<br />";

// string key
$hex_colors = [
    'red' => '#ff000',
    "blue" => '#224422'
];
// echo "mau xanh: $hex_colors['red']";  //khong chay duoc
echo "Mau xanh: " . $hex_colors['red'];
echo "<br />";

$person =
    [
        'fullname' => 'Poo Phoong',
        'age' => 100,
        'add' => 'Thai Nguyen'
    ];
// print_r($person);
var_dump($person);
echo "<br />" . $person['fullname'];
echo "<br />";

// mang 2 chieu
$persons = [
    [
        'fullname' => 'Poo Phoong',
        'age' => 100,
        'add' => 'Thai Nguyen'
    ],
    [
        'fullname' => 'Poo Phoong 2',
        'age' => 100,
        'add' => 'Thai Nguyen'
    ],
    [
        'fullname' => 'Poo Phoong 3',
        'age' => 100,
        'add' => 'Thai Nguyen'
    ],
];

var_dump($persons);
echo $persons[0]['fullname'];
echo "<br />";
// echo $persons[1] . add; // error

// chuyen du lieu sang JSON
var_dump(json_encode($persons));
echo "<br />";
