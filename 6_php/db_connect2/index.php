<?php
include 'db_connect.php';
$error_flg = "default";
//registerボタンを押したら
if (isset($_POST["submit"])) {
  //
  //代入　＝　$_POST["inputformのnameを書く"]
  $fname = $_POST["user_first_name"];
  $lname = $_POST["user_last_name"];
  $phoneNumber = $_POST["user_phone"];
  $email = $_POST["user_email"];
  $address1 = $_POST["user_address_1"];
  $address2 = $_POST["user_address_2"];
  // $submit = $_POST["submit"];
  //値が入っているか確認する　値が入っていたらinsertを起動する &&で反応しない理由は何？
  if (empty($fname) || //!isset($fname)とするとすでに値が存在していることになる。ので間違っていることになる
      empty($lname) || //!empty($fname)とすると中身が空だったらになる
      empty($phoneNumber) ||// || orを入力するとAが空　か　Bが空　、、、になる
      empty($email) ||
      empty($address1) ||
      empty($address2) ){
      //空があれば  displayJudge("true");を返す
      // echo "Connection trriger of insert is not working";echo "<br>\n";
      // displayJudge(true);
      $error_flg = true;
  } else{
    registerUserdata($CONNECTION);
    // ↓挿入失敗時に
    // echo "Connection trriger of insert";echo"<br>\n";
    // displayJudge(false);
     $error_flg = false;
  }
}
//step１クエリを書く
$sql = "
select
  id as emp_id,
  first_name as emp_name,
  last_name as emp_lname,
  email_address as emp_mail,
  phone_number as emp_phone,
  address1 as emp_address1,
  address2 as emp_address2
from
  employees
order by
id desc";
//step２ sql関数　mysqli_query(DBとクエリ)　データをここに持ってくる
$result = mysqli_query($CONNECTION,$sql);
// var_dump($result);die();
if($result){
  // echo "the query returned => ".mysqli_num_rows($result);
  // echo "<ht>";
} else{
  echo "we encountered an error ->".mysqli_error($CONNECTION);
  echo "<ht>";
}
// while($row = mysqli_fetch_assoc($result)){
//   var_dump($row["emp_name"]);echo"<br>";
//   var_dump($row["emp_id"]);echo"<br>";
// }
// die();
// print_r(
//   $fname,
//   $lname,
//   $phoneNumber,
//   $email,
//   $address1,
//   $address2
// )
//update
//function 登録を押したら、insertのクエリを動かす。
function registerUserdata($CONNECTION){
  //dbとinputformが繋がっているもの(name)を呼ぶ
  $fname = $_POST["user_first_name"];
  $lname = $_POST["user_last_name"];
  $phoneNumber = $_POST["user_phone"];
  $email = $_POST["user_email"];
  $address1 = $_POST["user_address_1"];
  $address2 = $_POST["user_address_2"];
  $submit = $_POST["submit"];
  //値が入っていたら
    $sqlInsertData = "
    	INSERT INTO
    	 `employees`(
  		 `status`,
  		 `first_name`,
  		 `last_name`,
  		 `phone_number`,
  		 `email_address`,
  		 `address1`,
  		 `address2`)
  		 VALUES (
  			0,
  			'$fname',
  			'$lname',
  			'$phoneNumber',
  			'$email',
  			'$address1',
  			'$address2'
  			 )";
      $result = mysqli_query($CONNECTION,$sqlInsertData);
      if($result){
        // print_r($result);
        // echo "User data insert is success";echo "<br>\n";
        // displayJudge("false");
        $error_flg = false;
        // echo "User data insert is success";echo"<br>\n";
      } else {
        // echo "User data insert is failed";echo"<br>\n";
        $error_flg = true;
      }
        // header("Location:index.php");
        // return;
}
if (isset($_POST["delete"])) {
  echo "delete";
   $id = $_POST["user_id"];
  $sqlDelete = "
    delete
      from
    `employees`
      where
        `id` = $id
  ";
  $update_result = mysqli_query($CONNECTION, $sqlDelete);
  return;
}
//step1
if (isset($_POST["update"])) {
  echo "update";
  //step2
  // - variables
  $fname = $_POST["user_first_name"];
  $lname = $_POST["user_last_name"];
  $phoneNumber = $_POST["user_phone_number"];
  $email = $_POST["user_email"];
  $address1 = $_POST["user_address_1"];
  $address2 = $_POST["user_address_2"];
  $user_id = $_POST["user_id"];
  //step3 クエリ
  // - prepare the statement
  $sqlUpdate = "
    UPDATE
      `employees`
    SET
      first_name = '$fname',
      last_name = '$lname'
    WHERE
        `id` = $user_id
  ";
  //step4　sql 関数で実行
  // - run the query
  $update_result = mysqli_query($CONNECTION, $sqlUpdate);
  // - check if the update query worked
  // if ($update_result == false) {
  //   var_dump(mysqli_error($CONNECTION));
  // }
  //step5　結果を返す
  // - return
  return;
}
// var_dumpはデバグしたい時に使う
// var_dump();//カッコ内の
// die();
//
// var_dump($error_flg);

$search_term = "";


//isset関数は、変数に値がセットされていて、かつNULLでないときに、TRUE(真)を戻り値として返します。
//NULLとは、変数が値を持っていないことをあらわす特別な値です。
if (isset($_GET["user_search_term"]) && !empty($_GET["user_search_term"])){
  $search_term = $_GET["user_search_term"];
// }
// var_dump();
// die();


//mysqli_fetch_assoc mysql_query関数でSELECT文などから取得したリソースデータを、レコード毎に連想配列にして返す
//それで下のwhile文にある＜td＞<?php  print_r($row["emp_id"]);？＞</td>でニックネームを使っているので
//select * from "employees" where first_name like "%first_name%"だけではエラーが表示される
//同じデータの形で渡す必要があるので↓のようにselect id as emp_id from でニックネームで渡すこと。

$sqlSearch = "
	select
          id as emp_id,
          first_name as emp_name,
          last_name as emp_lname,
          email_address as emp_mail,
          phone_number as emp_phone,
          address1 as emp_address1,
          address2 as emp_address2
  from
          `employees`
  WHERE
          first_name
  LIKE
          '%$search_term%'
  OR
          last_name
  LIKE
          '%$search_term%'
  OR
          phone_number
  LIKE
          '%$search_term%'
  OR
          email_address
  LIKE
          '%$search_term%'
  OR
          address1
  LIKE
        '%$search_term%'
	";

  $result = mysqli_query($CONNECTION, $sqlSearch);
  // var_dump($result); echo"<br>\n";
  // die();
}
  // return;




?>

<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>EMPLOYEE MGT</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>
	<!-- main container class -->
	<div class="container" style="padding-top: 15px;">
		<!-- jumbotron section -->
		<div class="jumbotron" style="margin-bottom: 15px; padding: 1rem 2rem;">
			<div class="row">
				<div class="col-sm-12 text-center">
					<h1>- EMPLOYEE MGT -</h1>
				</div>
			</div>
		</div>

		<!-- header section -->
		<header class="row">
			<div class="col-sm-12">
      <!-- insert成功なら（true）なら表示 -->
      <?php
      // var_dump($error_flg !== "default");
      // var_dump($error_flg != "default");
        // var_dump($error_flg);
        // var_dump(strlen($error_flg));
        // var_dump($error_flg == false);
        //真偽値の変数　 真
        if($error_flg !== "default" && $error_flg == false){
       ?>
				<!-- success message -->
				<div class="alert alert-success" role="alert">
					An employee was registered!
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="failse">&times;</span>
					</button>
				</div>
      <?php
      //<!-- insert失敗なら（failed）なら表示 -->
    } else if($error_flg !== "default" && $error_flg == true) {
      ?>
				<!-- error message -->
				<div class="alert alert-danger" role="alert">
					Unable to save employee!
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
      <?php
        }
      ?>
				<!-- registration form -->
				<div class="card">
					<div class="card-header">
						REGISTRATION FORM
					</div>
					<div class="card-body">
						<form method="POST" action="">
							<div class="form-row">
								<div class="form-group col-md-4">
									<label for="inputEmail4">Firstname</label>
									<input type="text" class="form-control" name="user_first_name" placeholder="John">
								</div>
								<div class="form-group col-md-4">
									<label for="inputPassword4">Lastname</label>
									<input type="text" class="form-control" name="user_last_name" placeholder="Doe">
								</div>
								<div class="form-group col-md-4">
									<label for="inputPassword4">Phone Number</label>
									<input type="text" class="form-control" name="user_phone" placeholder="(053)323354">
								</div>
							</div>
							<div class="form-group">
								<label for="inputAddress">Email Address</label>
								<input type="text" class="form-control" id="inputAddress" name="user_email" placeholder="fdc@fdc.com">
							</div>
							<div class="form-group">
								<label for="inputAddress">Address</label>
								<input type="text" class="form-control" id="inputAddress" name="user_address_1" placeholder="1234 Main St">
							</div>
							<div class="form-group">
								<label for="inputAddress2">Address 2</label>
								<input type="text" class="form-control" id="inputAddress2" name="user_address_2" placeholder="Apartment, studio, or floor">
							</div>
							<button type="submit" name="submit" class="btn btn-primary">REGISTER</button>
						</form>
					</div>
				</div>
			</div>
		</header>

		<!-- content section -->
		<div class="row" style="margin-top: 15px; margin-bottom: 15px;">
			<div class="col-sm-12">
				<div class="card">
					<div class="card-body">

            <!-- ACTIVITY 4 - SEARCH -->
              <div class="clearfix">
                  <form class="form-inline">
                      <div class="input-group mb-3 col-12" style="padding-left: 0px; padding-right: 0px;">
                          <input type="text" class="form-control" placeholder="Type something" aria-describedby="basic-addon2" name="user_search_term" value="<?php echo $search_term ?>">
                          <div class="input-group-append">
                              <button class="btn btn-outline-secondary" type="submit">SEARCH</button>
                          </div>
                      </div>
                  </form>
              </div>
            <!-- ACTIVITY 4 - SEARCH -->

						<table class="table table-bordered">
							<thead class="thead-dark">
								<tr>
									<th scope="col" class="text-center">#</th>
									<th scope="col" class="text-center">First</th>
									<th scope="col" class="text-center">Last</th>
									<th scope="col" class="text-center">Email</th>
									<th scope="col" class="text-center">Phone</th>
									<th scope="col" class="text-center">Address</th>
									<th scope="col" class="text-center"></th>
								</tr>
							</thead>
							<tbody>
								<tr>

                  <?php
                  //mysqli_fetch_assoc mysql_query関数でSELECT文などから取得したリソースデータを、レコード毎に連想配列にして返す
                  //こいつを例にすると$result = mysqli_query($CONNECTION,$sql); $CONNECTIONでDBと接続した状態にして$sqlこれを取ってきていることが条件
                    while($row = mysqli_fetch_assoc($result)){
                      // var_dump($result); echo"<br>\n";v
                      // die();
                   ?>
                   <tr>

                  <!-- mysqli_fetch_assoc($result)これを使う時には一回DBの中身をsqlで取らないと使えない -->
                  <!-- テーブルタグの中でwhile(mysql_query関数)を使うこと -->
                  <td><?php  print_r($row["emp_id"]);?></td>
                  <td><?php  print_r($row["emp_name"]);?></td>
                  <td><?php  print_r($row["emp_lname"]);?></td>
                  <td><?php  print_r($row["emp_mail"]);?></td>
                  <td><?php  print_r($row["emp_phone"]);?></td>
                  <td><?php  print_r($row["emp_address1"]);?></td>

                  <td style="width: 150px;">
                    <div class="btn-group" role="group" aria-label="Basic example">

                      <form class="" action="" method="post">
                          <input type="text" name="user_first_name" value="<?php  print_r($row["emp_name"]);?>">
                          <input type="text" name="user_last_name" value="<?php  print_r($row["emp_lname"]);?>">
                          <input type="text" name="user_email" value="<?php  print_r($row["emp_mail"]);?>">
                          <input type="text" name="user_phone_number" value="<?php  print_r($row["emp_phone"]);?>">
                          <input type="text" name="user_address_1" value="<?php  print_r($row["emp_address1"]);?>">
                          <input type="text" name="user_address_2" value="<?php  print_r($row["emp_address2"]);?>">
                          <input type="text" name="user_id" value="<?php echo $row["emp_id"] ?>">
                        <input type="submit" name="update" class="btn btn-warning" value="update">
                      </form>

                      <form class="" action="" method="post">
                        <input type="text" name="user_id" value="<?php echo $row["emp_id"] ?>">
                        <input type="submit" name="delete" class="btn btn-danger" value="DELETE">
                      </form>



                    </div>
                  </td>



                  </tr>
                <?php
                // var_dump($result); echo"<br>\n";
                // die();
              } ?>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
