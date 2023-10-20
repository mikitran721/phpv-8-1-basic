<?php

/**
 * thuc hanh: ngoai le/exceptions
 * try-catch-exception-finally
 * finally: luon thuc hien
 */
function divide($a, $b)
{
    // neu loi se dung lai
    if (!$b) {
        throw new Exception('Cannot divide by zero.');
    }
    return $a / $b;
}

// dung try-catch de bat ngoai le
try {
    echo divide(10, 2);
    echo divide(5, 0);
    echo "no errors";
} catch (Exception $e) {
    echo "<br/>Caught an exception: " . $e->getMessage() . "<br/>";
} finally {
    echo "No problems."; //giai phong bien, don dep
}
