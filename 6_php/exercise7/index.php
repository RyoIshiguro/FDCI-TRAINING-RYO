<!DOCTYPE html>
  <html lang="ja">
  <head>
    <meta charset="UTF-8">
    <title>
    </title>
  </head>

  <style media="screen">

  </style>

  <body>
    <form action="" method="post">
      Name: <input type="text" name="firstname">
      <button type="submit" name="button" style="width:100px;">Submit Name</button>
    </form>

    <?php
      if(isset($_POST['firstname'])) {
        echo 'Hello:', $_POST['firstname'];
      }
      echo "<br>\n";
    ?>


  </body>

</html>
