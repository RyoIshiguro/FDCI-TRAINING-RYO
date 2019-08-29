<!DOCTYPE html>
<html lang="jp" dir="ltr">
  <head>
    <meta charset="utf-8">

    <title>
      palindrome
    </title>

  </head>

  <body>

    <form class="" action="" method="post">
      <h1>Is palindrome?</h1>

      Word to check : <textarea name="comments" rows="1" cols="40"></textarea>
      <button type="submit" name="submit">Check</button><br><br>


      <?php

        function palindromeCheck($name){
          // $comments = $_POST["comments"];
          $reverse = strrev($name);
          // if($name == $reverse){

          if(strcasecmp($name, $reverse) == 0){
            echo $_POST["comments"]." is palindrome"; echo "<br>\n";
          }else{
            echo $_POST["comments"]." is not palindrome"; echo "<br>\n";
         }
        }
       ?>

       <?php
       if(isset($_POST["comments"])){
         palindromeCheck($_POST["comments"]);
       }
        ?>





       <?php
         echo "------------------------------------------------------";
         echo "<br>\n";
         echo "<br>\n";
        ?>

    </form>


  </body>

</html>
