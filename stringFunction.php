<?php
$fullName = 'Poo Phoong';
$lg = strlen($fullName);
// print_r($lg);

/**
 * dao nguoc chuoi - REVERT STRING
 * cp: strrev();
 */
$rev = strrev($fullName);
print_r($rev);

/**
 * chuyen sang ky tu thuong
 * cp: strtolower();
 * cp: strtoupper();
 * ap dung trong so sanh chuoi
 */

$low = strtolower($fullName);
$upp = strtoupper($fullName);
print_r($upp);

/**
 * tim kiem va thay the
 * cp: str_replace(' ', '-',$x)
 */
$rep = str_replace(' ', '**', $fullName);
print_r($rep);

/**
 * Kiem tra str bat dau voi 1substr nao do khong
 * str_starts_with()
 */

$fname2 = "Ngo Bao Loc";
// if (str_starts_with($fname2, "Ngo")) {
if (str_starts_with(strtolower($fname2), "ngo")) {
    echo "His name start with ngo";
};

//kiem tra ket thuc voi cum ki tu
if (str_ends_with(strtolower($fname2), strtolower('loc'))) {
    echo "<br />His name ends with Loc<br/>";
}

/**
 * mac dinh echo se hien thi dang html,javascript khi dua vao
 * muon de nguyen goc:
 * cp: echo htmlspecialchars(`<h1>Hello</h1>`);
 */

// echo htmlspecialchars("<h1>Hello</h1>");
// hacker hay tan dung viec nay de chen ma doc
echo "<script>console.log('Hello world')</script>";
printf('%s likes %s', '<b>Poo</b>', 'Pones<br/>');
printf('pi = %f', 3.14, '<br/>');
