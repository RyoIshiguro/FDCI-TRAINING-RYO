<!DOCTYPE html>
<html lang="ja" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>


    <?php

        $host = 'localhost';
        $dbname = 'fdc_exercise';
        $dbuser = 'Ryo';
        $dbpassword = 'sixdenpis';

        try{
            $pdo = new PDO("mysql:host=$host;dbname=$dbname;
            charset=utf8",
            "$dbuser",
            "$dbpassword"
          );
            header("Location:/connect_db/db_success.php");
        } catch (PDOException $e) {
            header("Location:/connect_db/db_fail.php");
          exit();
        }

    ?>


  </body>
</html>
