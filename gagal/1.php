<?php
function sum (int $first , int $last){
    $total = $first + $last;
    echo $first + $last = $total;
};
sum('100','100');
sum(100,100);
sum(true,false);
sum([],[]);