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

echo '\n';



function outer() {
    $count = 0;

    return function() use (&$count) {   // Closure এখানে তৈরি হলো
        $count++;
        echo "Count: $count\n";
    };
}

$counter = outer();

$counter();  // Count: 1
$counter();  // Count: 2
$counter();  // Count: 3
