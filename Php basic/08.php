<?php

$num = 67;

// function add(){

//   global $num;
//   echo $num = $num +10;
// }


function add(){
  static $num =10;
  echo $num . "\n";
  $num++;
}

add();
add();
add();
add();


// echo $num;

?>