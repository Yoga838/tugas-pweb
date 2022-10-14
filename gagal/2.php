<?php
function sumAll (...$values)
{
    $total = 0;
    foreach ($values as $value){
        $total += $value;
    }
    echo "total " . implode(" + ", $values) . " = $total";
}

sumAll(10,20,30,40);
sumAll(...[10,20,30,40]);