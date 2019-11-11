]<?php
  class Calculator
  {
      public $num1 = 0;
      public $num2 = 0;



    function __construct($num1,$num2)
    {
      $this -> num1 = $num1;
      $this -> num2 = $num2;
    }
    function add(){
      return $this->num1 + $this->num2;
    }

    function subtract(){
      return $this->num1 - $this->num2;
    }

    function divide(){
      return $this->num1 / $this->num2;
    }

    function mutiply(){
      return $this->num1 * $this->num2;
    }

  }



    $num = new Calculator(12,6);

    var_dump($num -> add());echo"<br>\n";


    // $num1 = new calucrator(3,5);
    // var_dump($num1 -> add());echo"<br>\n";

    var_dump($num -> subtract());
    var_dump($num -> divide());
    var_dump($num -> mutiply());
 ?>
