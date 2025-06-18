<?php

/** functions */
declare(strict_types=1);

function foo(int|float $x, int|float $y): float {
    return $x * $y;
}

echo foo(5.0, 10);

var_dump(foo(4,5));


$x =23;
function sum() :int{
    global $x;
    return $x;
};


function prints( $callback){
    echo $callback();
}

prints('sum');


