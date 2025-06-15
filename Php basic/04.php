<?php

$arr = ["php","js","sql"];

echo empty($arr[4]);
$arr[] = "c--";
echo count($arr);

array_push($arr,"c++","js","go");
print_r($arr);


$array = [
  false => "a",
  1 => "b",
  1.3 => "c"
];

print_r($array);