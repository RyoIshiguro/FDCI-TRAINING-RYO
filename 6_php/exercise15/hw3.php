<?php

  class Sort{

    public $numbers_from = [0,0,0,0,0];
    // public $numbers = [0,0,0,0,0];

    function __construct($numbers_from)
      {
        $this -> numbrers_from = $numbers_from;
        // $this -> numbers_to = $numbers;
      }

    function sortNumber($numbers_from = [5,12,28,19,20])
      {

        echo "from :"; echo"<br>\n";

        // print_r($numbers_from); echo"<br>\n";

        for ($i=0; $i < count($numbers_from) ; $i++) {

          echo $numbers_from[$i];
          echo " " ;

        }


        echo"<br>\n";

        echo "to :"; echo"<br>\n";
        sort($numbers_from);
        // var_dump($numbers_from); echo"<br>\n";

        // echo $numbers_from[0];

        for ($i=0; $i < count($numbers_from); $i++) {

          echo $numbers_from[$i];
          echo " " ;

        }


        // var_dump($numbrers_from);
      }
  }


  // $numbers = new Sort;
  $numbers_from = new Sort($numbers_from = [5,12,28,19,20]);
  $numbers_from -> sortNumber($numbers_from = [5,12,28,19,20]);
  // var_dump($numbrers_from);echo"<br>\n";
  // print_r($numbrers_from -> sortNumber($numbrers_from));
  // $numbrer_from = new Sort($numbers = [5,12,28,19,20]);
  // $numbers = new Sort($numbers = [5,12,28,19,20]);
  // var_dump($numbers -> sortNumber());
  // var_dump($this -> sortNumber());
  // $this -> sortNumber();
  // sortNumber();
  // var_dump($numbers -> sort());

  //これは動く
  // $number1 = [5,12,28,19,20];echo"<br>\n";
  // sort($number1);echo"<br>\n";
  // var_dump($number1);echo"<br>\n";

 ?>
