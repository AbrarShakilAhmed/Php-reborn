<?php
// declare(strict_types = 1);

// function app($x,$y){
//   $k = ( $x+$y);
//   return$k;

// }
// $arr = app('4',3);

// var_dump($arr);

// $x = .4;
// $y = 1 - .6;

// if($x ==$y){
//   echo " yes";

// }else{
//   echo " no";
// }



// $let = "will browne";

// echo " \n". $let[1] = "4";
// echo " \n". $let;


// heredoc

$rf = 5;

$text = <<< App

line2 $rf
line2
line2
line2

App;

echo nl2br( $text);

$text1 = <<<'App'

line54
line54
line54 $rf
line54

App;
echo $text1 ;
