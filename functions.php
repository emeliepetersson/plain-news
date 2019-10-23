<?php
declare(strict_types=1);
// This is the file where you can keep all your functions. Remember to NOT
// execute/run any functions in this file. Keep it dumb.

//https://stackoverflow.com/questions/2910611/php-sort-a-multidimensional-array-by-element-containing-date
function dateCompare($a, $b)
{
    $t1 = strtotime($a['Published date']);
    $t2 = strtotime($b['Published date']);
    return $t1 - $t2;
}    




