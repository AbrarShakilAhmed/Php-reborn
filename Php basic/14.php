<?php

$arr = [1,2,3,4,5,6,7,8];
$arr2 = ['a','b','c',0];

print_r( array_map(fn($e)=>$e,$arr));
print_r($arr);