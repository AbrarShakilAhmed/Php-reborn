<?php
function app($callback, $name){
  echo 1;
  sleep(2);
  $callback($name);  // এখানে callback function-এ parameter পাঠানো হচ্ছে
  echo 2;
}

function call($name){
  echo "Hello, " . $name;
}

app('call', 'রাহুল');
