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
    <form action="index2.php" method="post">

      <h1>Company Dinner Feedback Survey</h1><br><br>



      <?php

      // if(isset($_POST["submit"])){
      //   //submitを使うことで提出前は起動しないが提出後に起動する機能が作成可能
      //   echo "Employee:".$_POST['Employee'];  echo"<br>\n";echo "<br>\n";
      //   echo "Rating:".$_POST['Rating']; echo"<br>\n";echo "<br>\n";
      //   echo "comments:".$_POST['comments']; echo"<br>\n";echo "<br>\n";
      // }else{
      //   echo "No Employee specified";echo"<br>\n";echo "<br>\n";
      //   echo "No Rating specified";echo"<br>\n";echo "<br>\n";
      //   echo "No comments specified";echo"<br>\n";echo "<br>\n";
      // }

      ?>


    <div class="hide">
        Employee name
    </div>

      <input type="text" name="Employee" value=""><br><br>

      <div class="hide">
        How would you rate you overall experience during dinner ?
      </div>


      <select class="hide" name="Rating">
        <option value="" name="Rating"></option>
        <option value="Excellent" name="Rating">Excellent</option>
        <option value="Very Good" name="Rating">Very Good</option>
        <option value="Good" name="Rating">Good</option>
        <option value="Fair" name="Rating">Fair</option>
        <option value="Poor" name="Rating">Poor</option>
      </select><br><br>

      <div class="hide">
        Do you have any other suggestions or comments to help us improve our future events ?
      </div>
      <textarea name="comments" rows="8" cols="80"></textarea><br><br>


      <button type="submit" name="submit">Submit</button><br><br>



      <?php
      echo "------------------------------------------------------";
      echo "<br>\n";
      echo "<br>\n";
       ?>
     </form>
     </body>
     </html>
