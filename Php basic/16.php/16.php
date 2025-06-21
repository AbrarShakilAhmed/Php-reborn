<?php

$count = 0;

function plus(){
  global $count;
  $count++;
  echo $count . "\n";
}

plus();
plus();
plus();
plus();