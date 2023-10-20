<?php
echo 'Cookies in PHP <br/>';


//luu cookie
setCookie('name', 'Poo', time() + 1 * 3600);
//1month = 24*3600*30;
//1day = 24*3600;
//cookie tu xoa khi time het han

if (isset($_COOKIE['name'])) {
    // echo "name: $_COOKIE['name'] <br />";
    echo $_COOKIE['name'] . "<br />";
}

//xoa cookie: set time cho cookie lui lai,nhu sau
setcookie('name', '', time() - 1 * 3600);
