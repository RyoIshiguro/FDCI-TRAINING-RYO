<?php

  include 'db_connect.php';

  $error_flg = "default";

  if (isset($_POST["register"])) {
    //
    //代入　＝　$_POST["inputformのnameを書く"]
    $fname = $_POST["first_name"];
    $lname = $_POST["last_name"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    //値が入っているか確認する　値が入っていたらinsertを起動する &&で反応しない理由は何？
    if (empty($fname) || //!isset($fname)とするとすでに値が存在していることになる。ので間違っていることになる
        empty($lname) || //!empty($fname)とすると中身が空だったらになる
        empty($email) ||// || orを入力するとAが空　か　Bが空　、、、になる
        empty($password)){
        // ↓挿入失敗時に返す
        // echo "Connection trriger of insert is not working";echo "<br>\n";

        $error_flg = false;

    } else{
      registerUserdata($CONNECTION);
      // var_dump($sql);
      // mysqli_error();
      // registerUserdata($CONNECTION);　が起動したら返す
      // echo "Connection trriger of insert";echo"<br>\n";

       $error_flg = true;
    }
  }

  $sql = "
    select
      id as user_id,
      first_name as user_first_name,
      last_name as user_last_name,
      email as user_email,
      password as user_password
    from
      users2
    order by
    id desc
    ";
    $sqlSelect = mysqli_query($CONNECTION,$sql);

    if($sqlSelect){
        // echo "the query returned => ".mysqli_num_rows($result);
        // echo "<ht>";
      } else{
        echo "we encountered an error ->".mysqli_error($CONNECTION);
        echo "<ht>";
      }


function registerUserdata($CONNECTION){
  $fname = $_POST["first_name"];
  $lname = $_POST["last_name"];
  $email = $_POST["email"];
  $password = $_POST["password"];


  $sqlInsertData = "
    INSERT INTO
      `users2`(
        `first_name`,
        `last_name`,
        `email`,
        `password`)
     VALUES (
       '$fname',
       '$lname',
       '$email',
       '$password'
     )";
     $register = mysqli_query($CONNECTION,$sqlInsertData);

     if($register){
        // print_r($result);
        echo "User data insert is success";echo "<br>\n";
        // displayJudge("false");
        // $error_flg = false;
        // echo "User data insert is success";echo"<br>\n";
      } else {
        echo "User data insert is failed";echo"<br>\n";
        var_dump($_POST["first_name"]);echo"<br>\n";
        var_dump($_POST["last_name"]);echo"<br>\n";
        var_dump($_POST["email"]);echo"<br>\n";
        var_dump($_POST["password"]);echo"<br>\n";
        die(mysqli_error($CONNECTION));
        // $error_flg = true;
      }
   }
   // }

   // function userstable($CONNECTION){
   //
   //   $sqlUserdataDisplay = "
   //    SELECT
   //          id as emp_id,
   //          first_name as user_first_name,
   //          last_name as user_last_name,
   //          email as user_email,
   //          password as user_password
   //   "
   // }










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

        <style type="text/css">
            .form-signin input {
                border-radius: 2px !important;
                margin-bottom: 10px !important;
            }
        </style>
    </head>
    <body class="text-center">
        <form class="form-signin" method="post">
            <img class="mb-4" src="http://fdc-inc.com/images/fdc.png" alt="" width="72" height="72">
            <h1 class="h3 mb-3 font-weight-normal">Please create a new account</h1>

            <?php
              //
              if($error_flg !== "default" && $error_flg == false){

              ?>

            <div class="alert alert-danger" role="alert">
                Unable to register! Please check the form below!
            </div>

            <?php
              }
             ?>

            <input type="text" class="form-control" placeholder="Firstname" required name="first_name">
            <input type="text" class="form-control" placeholder="Lastname" required name="last_name">
            <input type="text" class="form-control" placeholder="Email" required name="email">
            <input type="password" class="form-control" placeholder="Password" required name="password">
            <input type="password" class="form-control" placeholder="Confirm Password" required name="password">

             <div class="checkbox mb-3">
                <label>
                    <a href="login.php">
                        Sign in
                    </a>
                </label>
            </div>

            <!-- login button -->
            <button class="btn btn-lg btn-primary btn-block" type="submit" name="register">Register</button>


            <?php
              // while ($row = mysqli_fetch_assoc($sqlSelect)){
             ?>


              <td style="width: 150px;">
                    <div class="btn-group" role="group" aria-label="Basic example">

                      <form class="" action="" method="post">
                          <input type="text" name="user_first_name" value="<?php  print_r($row["user_id"]);?>">
                          <input type="text" name="user_last_name" value="<?php  print_r($row["user_first_name"]);?>">
                          <input type="text" name="user_email" value="<?php  print_r($row["user_last_name"]);?>">
                          <input type="text" name="user_phone_number" value="<?php  print_r($row["user_email"]);?>">
                          <input type="text" name="user_address_1" value="<?php  print_r($row["user_password"]);?>">
                      </form>
                    </div>
                  </td>

            <?php
              // }
             ?>


        </form>
    </body>
</html>
