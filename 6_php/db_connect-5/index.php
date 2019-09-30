<?php

  include 'db_connect.php';



  $error_flg = "default";

  // echo "hello world";"<br>\n";"<br>\n";

  //login 押した時の動作
  if (isset($_POST["log_in"])){

    if(empty($_POST["email"]) || empty($_POST["password"])){
        $error_flg = true;

      } else {
        // $emailStr = $_POST['email'];
        // $passwordStr = $_POST['password'];
        // $EmailPsw = "select *  from `users2` where `email` LIKE '$emailStr' and `password` LIKE '$passwordStr'";
        $EmailPsw  = "
                            SELECT
                                    *
                            FROM
                                    `users2`
                            WHERE
                                    `email` LIKE '".$_POST['email']."'
                            AND
                                    `password` LIKE '".$_POST['password']."'
                            ";
        // printf($EmailPsw);
        $qry = mysqli_query($CONNECTION,$EmailPsw);

        if(mysqli_fetch_assoc($qry)){
          $_SESSION["email"] = $_POST["email"];
          header("Location:home.php");
        } else {
          $error_flg = true;
          mysqli_error($CONNECTION);
          // var_dump($_POST['email']);
          // var_dump($_POST['password']);

          while ($row = mysqli_fetch_assoc($qry)) {
            var_dump($row["email"]);"<br>\n";
            var_dump($row["passwprd"]);"<br>\n";
          }

        }

      }
    }


?>
<!doctype html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">
        <title>Signin Template for Bootstrap</title>
        <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/sign-in/">
        <!-- Bootstrap core CSS -->
        <link href="https://getbootstrap.com/docs/4.0/dist/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="https://getbootstrap.com/docs/4.0/examples/sign-in/signin.css" rel="stylesheet">
    </head>
    <body class="text-center">
        <form class="form-signin" method="post">
            <img class="mb-4" src="http://fdc-inc.com/images/fdc.png" alt="" width="72" height="72">
            <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>


            <?php
              //
              if($error_flg !== "default" && $error_flg == true){

              ?>
              <div class="alert alert-danger" role="alert">
                  Unable to login account! Please check your credentials!
              </div>
            <?php
              }
             ?>


            <!-- email address -->
            <label for="inputEmail" class="sr-only">Email address</label>
            <input type="email" id="inputEmail" class="form-control" name="email" placeholder="Email address" >

            <!-- passwprd -->
            <label for="inputPassword" class="sr-only">Password</label>
            <input type="password" id="inputPassword" class="form-control" name="password" placeholder="Password" >

            <div class="checkbox mb-3">
                <label>
                    <a href="register.php">
                        Sign up
                    </a>
                </label>
            </div>

            <!-- login button -->
            <button class="btn btn-lg btn-primary btn-block" type="submit" name="log_in">Sign in</button>



        </form>
    </body>
</html>
