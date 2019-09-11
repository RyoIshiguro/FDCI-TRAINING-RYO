<?php
include 'db_connect.php';

// $fname = $_POST["user_first_name"];
// $lname = $_POST["user_last_name"];
// $phoneNumber = $_POST["user_phone"];
// $email = $_POST["user_email"];
// $address1 = $_POST["user_address_1"];
// $address2 = $_POST["user_address_2"];
// $submit = $_POST["submit"];
$dissplayJudge = "";




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
      //空があれば  displayJudge("failed");を返す
      echo "Connection trriger of insert is not working";
      displayJudge("failed");
  } else{
    registerUserdata($CONNECTION);
    // echo "Connection trriger of insert";
  }
}




$sql = "
select
  id as emp_id,
  first_name as emp_name,
  last_name as emp_lname,
  email_address as emp_mail,
  phone_number as emp_phone,
  address1 as emp_address1
from
  employees
order by
id desc";

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

//function 登録を押したら、insertのクエリを動かす。
function registerUserdata($CONNECTION){

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
        displayJudge("true");

      } else {
        echo "User data insert is failed";
        displayJudge("failed");
      }
        // header("Location:index.php");
        // return;
}










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
      function displayJudge($dissplayJudge){

        //真偽値の変数　真
        if($dissplayJudge == "true"){
       ?>

				<!-- success message -->
				<div class="alert alert-success" role="alert">
					An employee was registered!
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>

      <?php
      //<!-- insert失敗なら（failed）なら表示 -->
    } else if($dissplayJudge == "failed") {
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
                      <button type="button" class="btn btn-warning">UPDATE</button>
                      <button type="button" class="btn btn-danger">DELETE</button>
                    </div>
                  </td>



                  </tr>
                <?php } ?>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
