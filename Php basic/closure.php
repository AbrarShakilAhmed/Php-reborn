<?php
//   $count = 0;

// function Outer(){
//   // global $count;
//   return function() use(&$count){
//     return ++$count;
//   };
// }

// $counter = Outer();

// echo $counter();
// echo $counter();
// echo $counter();
// echo $counter();

$arr = ["user1"];
function arrPush(&$arr){
  return function($user) use(&$arr){
    return array_push($arr,$user);
  };

}

$Adduser = arrPush($arr);
$Adduser('abrar');

print_r($arr);
