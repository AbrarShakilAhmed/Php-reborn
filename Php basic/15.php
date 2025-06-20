<?php
function app($callback){
  echo 1;
  sleep(3);
  $callback();
  echo 2;

}

function call(){
  echo 'done';
}

app('call');


function clouse(){
  
}