<?php

  class Display{

    public $name = "";

    function __construct($name)
      {

        if(isset($_POST["name"]))
          {
            $this -> display = $name = $_POST["name"];
            echo "Hello world I'm $name";
          }

      }

  }
  $name = new Display("");
  // var_dump($name);

 ?>

 <!DOCTYPE html>
 <html lang="ja" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body>
     <form class="" action="" method="post">
       <input type="text" name="name" value="">
       <button type="submit" name="submit">SUBMIT</button>
     </form>

   </body>
 </html>
