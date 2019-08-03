<?php

//フィボナッチ数列

function fib($n){
    if($n <= 1){
      return $n;
      echo "<br>\n";
      echo "<br>\n";
    } else {
      return fib($n-2) + fib($n-1);
    }
  }

function loop($b){
  for ($i=0; $i <= $b; $i++) {
    echo "$i"." : ".fib($i);
    echo "<br>\n";
  }
}

echo loop(13);
echo "<br>\n";
echo "<br>\n";

 ?>
