<?php

/**
 * define an arrow function
 * Some useful function of Array
 */

$y = 22;

function sayHello($name)
{
    // de su dung $y can khai bao `global y`
    global $y;
    echo "y=$y <br/>";
    echo $name;
}

function sum($a = 0, $b = 0)
{
    return $a + $b;
}

// gan mot function vao mot bien
// assign a function to a variable
// can co dau `;` khi thuc hien
$sum2 = function ($a, $b) {
    return $a + $b;
};

// echo $sum2(6, 6);

//ARROW FUNCTION
$sum3 = fn ($a, $b) => $a + $b;

// echo $sum3(7, 9);

/**
 * HAM CO SAN BUILT-IN FUNCTION
 */

//1. count() tra ve tong so phan tu array
$arr = ['1', '4', '6.7', '9', '0'];
$t = count($arr);
// echo $t;

// 2. search inside array
// in_array() kiem tra ky tu cong trong array khong

// var_dump(in_array('1', $arr));
// echo "<br/>";

// them phan tu vao cuoi mang: array_push();
array_push($arr, 'poo', 'ngao');

//them phan tu vao dau mang `array_unshift()`
array_unshift($arr, 'Phoong', 'Bap cai');

// xoa phan tu cuoi array `array_pop()`
array_pop($arr);

// xoa phan tu dau array `array_shift()`
array_shift($arr);

// chunk an arry - xoa phan tu bat ky theo vi tri chi dinh
$chunk_arr = array_chunk($arr, 2);



// merge array - gop mang
$arr1 = [2, 6, 7, 8];
$arr2 = [5, 9, 10];
$merged_arr = array_merge($arr1, $arr2);


/**
 * toan tu SPREAD - operator
 */
$arr3 = [...$merged_arr, '100'];

$arr4 = [...$arr1, ...$arr2, ...$arr3, 'Bap ngo'];

/**
 * COMBINE ARRAY: tao thanh cap key-value
 * do rong 2 array phai = nhau
 */

$a = ['name', 'add'];
$b = ['poo', 'TNC'];
$ab = array_combine($a, $b);

// chi lay key cua array
// -- print_r(array_keys($ab));

// chi lay ra value cua array
// -- print_r(array_values($ab));

/**
 * ARRAY-FLIP: dao key-value cho nhau
 */
// -- print_r(array_flip($ab));

/**
 * tao mot array tu mot dai so
 * cp: range(1,10);
 */

$ra = range(2, 5);
print_r($ra);

// ARRAY_MAP()
// map an array to another array
//with the same size, but other values

$d = array_map(function ($x) {
    return $x * $x;
}, $ra);
// print_r($d);

/**
 * viet theo arrow function
 */

$d2 = array_map(fn ($x) => $x * $x, $ra);
// print_r($d2);

/**
 * loc - filter array
 * cp: array_filter(arr_goc, fn()=>logic)
 */

//  loc so chan
$fa = array_filter($ra, fn ($x) => $x % 2 == 0);
print_r($fa);
