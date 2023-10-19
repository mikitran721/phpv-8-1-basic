<?php
$age = 30;
if ($age >= 18) {
    echo "bc <br>";
}

$date_time = date("H j F"); //F=month; j=day number; H =hour; 
echo $date_time;

$hello = "";

$hour = date("H");
if ($hour < 12) {
    $hello = "Morning";
} else if ($hour >= 12 && $hour <= 17) {
    $hello = "Afternoon";
} else {
    $hello = "Evening";
}

$comments = [
    'Good', "I like it", "How are you"
];

$cText = "";
if (empty($comments)) {
    $cText = "No comments";
}

echo !empty($comments) ? "There are comments" : "No comments";
$first_cmt = !empty($comments) ? $comments[0] : 'No comments';


// coalescing operator
$comments1 = []; //mang rong
$x = $comments1[0] ?? 'No comments';

echo $x;

$color = 'blue';

switch ($color) {
    case 'red':
        $x = 'red';
        break;
    case 'green':
        $x = 'green';
        break;

    default:
        $x = "nothing";
}
