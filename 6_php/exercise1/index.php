<?php echo "---------------1-------------------" ; echo "<br>\n";  echo "<br>\n";?>


<?php
  echo "This is a String";
  echo "<br>\n";
?>

<?php
  $a = 2.5;
  echo $a;
  echo "<br>\n";
?>

<?php
  $name = array("Lucy","Panda","Grizzly","Hunter");
  print_r($name);
    echo "<br>\n";
    echo "<br>\n";
?>


<?php echo  "---------------2-------------------" ;  echo "<br>\n"; ?>

  <?php

    $str1 = "hello world!";
    $first_name = "Ryo";

    echo mb_substr("hello world!",0,1);echo "<br>\n";

    echo mb_substr("hello world!",11,11);echo "<br>\n";

    echo (ucwords($str1));echo "<br>\n";

    echo $str_len1 = strlen($str1);echo "<br>\n";

    echo $str1. " ". $first_name . "<br />\n";

   ?>


   <?php echo  "---------------3-------------------" ;  echo "<br>\n"; ?>

   <?php
     $a = 300;
     $b = 200;
     $sum = $a + $b;
     echo "$sum"; echo "<br>\n";
   ?>

   <?php
     $a = 300;
     $b = 200;
     $mul = $a * $b;
     echo "$mul"; echo "<br>\n";
   ?>
