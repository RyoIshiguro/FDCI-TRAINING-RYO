<!DOCTYPE html>
<html lang="ja" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>


    <?php
        // - server information
        $host = "localhost";
        $user = "Ryo";
        $password = "sixdenpis";
        $dbname = "fdc_exercise";

        // - creating connection
        $conn = mysqli_connect(
        			$host,
        			$user,
        			$password,
        			$dbname
        		);

        // - Check connection
        if ($conn) {
          include("db_success.php");
        } else {
          include("db_fail.php");
        }
      ?>



  </body>
</html>
