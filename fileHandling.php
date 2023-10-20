<?php
//doc du lieu tu file
//upload image qua form

/**
 * 1
 * Read/write file on server
 * se co dung luong Byte cua file o cuoi
 * da fopen phai co fclose
 */

$filePath = './fruits.txt';
if (file_exists($filePath)) {
    // print_r(readfile($filePath));

    // mo file chi de doc
    $fileHandle = fopen($filePath, 'r');
    $fileContent = fread($fileHandle, filesize($filePath));
    fclose($fileHandle);

    print_r($fileContent);
} else {
    //file khong ton tai se tao file moi
    $fileHandle = fopen($filePath, 'w'); //tao file moi de ghi
    $fileContent = 'banana' . PHP_EOL . 'Mango' . PHP_EOL . "melon";

    fwrite($fileHandle, $fileContent);
    fclose($fileHandle);
}
