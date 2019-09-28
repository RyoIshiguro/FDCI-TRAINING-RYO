<?php
// - ALWAYS INITIALISE SESSION
session_start();

//データベースの情報を変数に入れる
$host = "localhost";
$user = "Ryo";
$password = "sixdenpis";
$dbname = "fdc_exercise";

// dbを繋げるmysqli_connectが関数　$CONNECTION変数に入れる
$CONNECTION = mysqli_connect(
  $host,
  $user,
  $password,
  $dbname,
);

//繋がっているならconnection failed を表示
function conect($a){

if (!$a) {
  //die() メッセージを出力し、現在のスクリプトを終了する
  //直近のエラーに文字列でエラーを表現
  die("Connection failed:".mysqli_connect_error());
} else {
  // echo "Connection success!";echo "<br>\n";
}
}

conect($CONNECTION);
