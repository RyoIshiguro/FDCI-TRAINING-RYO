<?php

  echo "----------------1------------------";
  echo "<br>\n";
  echo "<br>\n";

  function areaOfRectangle($a,$b){
    $rectangle = $a * $b;
    echo "A rectangle of length $a and width $b has an area of $rectangle.";
  }

  areaOfRectangle(2,4);
  echo "<br>\n";
  echo "<br>\n";



  echo "----------------2------------------";
  echo "<br>\n";
  echo "<br>\n";

  function palindromeCheck($name){
    $reverse = strrev($name);

    if($name == $reverse){
      echo "It's palindrome";
    }else{
      echo "It's not palindrome";
    }
  }

  palindromeCheck("madam");
  echo "<br>\n";
  echo "<br>\n";

  echo "-----------------------------------";
  echo "<br>\n";
  echo "<br>\n";
?>
