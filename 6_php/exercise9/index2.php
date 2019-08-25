<!DOCTYPE html>
  <html lang="ja">
  <head>
    <meta charset="UTF-8">
    <title>
      homework_POST
    </title>
  </head>


  </style>

  <body>
    <form name="from index.php" action="" method="post">

      <h1>From Index.php</h1><br><br>

      <?php
      echo "------------------------------------------------------";
      echo "<br>\n";
      echo "<br>\n";
       ?>


      <?php

      if(isset($_POST["submit"])){
        //submitを使うことで提出前は起動しないが提出後に起動する機能が作成可能
        echo "Employee:".$_POST['Employee'];  echo"<br>\n";echo "<br>\n";
        echo "Rating:".$_POST['Rating']; echo"<br>\n";echo "<br>\n";
        echo "comments:".$_POST['comments']; echo"<br>\n";echo "<br>\n";
      }else{
        echo "No Employee specified";echo"<br>\n";echo "<br>\n";
        echo "No Rating specified";echo"<br>\n";echo "<br>\n";
        echo "No comments specified";echo"<br>\n";echo "<br>\n";
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
