<?php
// echo "VARIABLES: <br>";
// $name = 'Poo';
// echo $name;
// $has_dog = 'Poo';
// echo $has_dog;
// $has_cat = true;
// echo $has_cat; //1
$has_car = false;
var_dump($has_car);
var_export($has_car);

// noi chuoi
$age = 10;
$name = 'Poo';
echo "is " . $age . ": ";

// dung nhay kep & bien ben trong -> se hien thi gia tri cua bien
echo "<br />Your age is: $age <br />";

// hoac de bien trong cap {..} da loi thoi phien ban PHP 8.2
// echo "<br> Name of your dog is: ${name}"; //loi thoi

//expression
echo '1' + '2'; //kq: 3; khong phai la '21'
echo "<br/>";

$sum = '2' + 3;
var_dump($sum); //(int)5

// echo 5 / 0; //bi loi zero; xu ly voi trycatch

echo 10 % 3; //chi lay so du;

// constants - hang; khi goi su dung - ko co dau $
define('SERVER_NAME', 'localhost');
define('DATABASE', 'test_db');
echo "Server: " . SERVER_NAME . ",db: " . DATABASE;
// echo "<br /> server: {SERVER_NAME}"; //khong ap dung viet nhanh cho const duoc
