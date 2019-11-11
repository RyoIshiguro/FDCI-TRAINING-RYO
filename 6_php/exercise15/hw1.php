<?php
  class Homework
    {
      public $person = "";

      function __construct($person)
        {
          $this -> person = $person;
        }

      function doHomework()
        {
          echo "CLASS IS INITIALISED!";
        }
    }

    $person = new Homework("");

    $person -> doHomework();
 ?>
