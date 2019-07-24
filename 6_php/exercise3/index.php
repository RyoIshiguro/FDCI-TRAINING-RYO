<?php

    echo"--------1----------";
    echo "<br>\n";
    echo "<br>\n";

  $answer = array("Iverson","76ers","Nuggets","Pistons","Grizzlies");
    print_r($answer);
    echo "<br>\n";
    echo "<br>\n";

  for ($i=0; $i < count($answer) ; $i++) {
    echo $answer[$i];
    echo "<br>\n";
    echo "<br>\n";
    }

    echo"--------while----------";
    echo "<br>\n";
    echo "<br>\n";

  $answerIndex = 0;
  while ($answerIndex < count($answer)) {
    echo $answer[$answerIndex];
    echo "<br>\n";
    echo "<br>\n";
    $answerIndex++;
    }

    echo"--------2----------";
    echo "<br>\n";
    echo "<br>\n";


      $num = array("1","2","3","4");
        print_r ($num);
        echo "<br>\n";
        echo "<br>\n";

      $i = 0;

      for ($i=0; $i <count($num) ; $i++) {
        echo 3 * $num[$i];
        echo "<br>\n";
        echo "<br>\n";
      }


      echo"--------while----------";
      echo "<br>\n";
      echo "<br>\n";

      $numIndex = 0;

      while ($numIndex < count($num)) {
        echo 3 * $num[$numIndex];
        echo "<br>\n";
        echo "<br>\n";
        $numIndex++;
      }

      echo"--------3----------";
      echo "<br>\n";
      echo "<br>\n";

      $wade = array("Heat","Bulls","Cavaliers","Flash","Legend");
        print_r ($wade);
        echo "<br>\n";
        echo "<br>\n";

        $i = 0;

        for ($i = count($wade) - 1; $i >= 0; $i--) {
           echo $wade[$i];
           echo  "<br>\n";
           echo  "<br>\n";
         }


 ?>
