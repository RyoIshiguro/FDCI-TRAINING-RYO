<?php

include 'db_connect.php';


//user count
$sqlGenderCount = "
										select
													count(*) as total_count
										from
													`gender_quiz`
									";

	$result = mysqli_query($CONNECTION,$sqlGenderCount);
	$total_rows = mysqli_fetch_assoc($result);
	$count = $total_rows["total_count"];
	// var_dump($sqlGenderCount);
	// die();


//male user count
$sqlMaleCount = "
										select
													count(*) as total_male_count
										from
													`gender_quiz`
									  where
													gender = 1
									";

	$result = mysqli_query($CONNECTION,$sqlMaleCount);
	$total_rows = mysqli_fetch_assoc($result);
	$malecount = $total_rows["total_male_count"];
	// var_dump($count);
	// die();

//female user count
$sqlFemaleCount = "
										select
													count(*) as total_female_count
										from
													`gender_quiz`
										where
													gender = 2
									";

	$result = mysqli_query($CONNECTION,$sqlFemaleCount);
	$total_rows = mysqli_fetch_assoc($result);
	$femalecount = $total_rows["total_female_count"];
	// var_dump($count);
	// die();

//数を取得　1、2以外の数字もしくはnull
//仮に0,1,2,null があったとして、１と２以外のものとNullを取得する
//other user count
$sqlOtherCount = " SELECT
													count(*) as total_other_count
									 FROM
									 				gender_quiz
									 WHERE
									 				gender!= 1
									 AND
									 				gender!= 2
									 or
									 				gender
									 is null
									";

	$result = mysqli_query($CONNECTION,$sqlOtherCount);
	$total_rows = mysqli_fetch_assoc($result);
	$othercount = $total_rows["total_other_count"];
	// var_dump($othercount);
	// die();

//count(*)をつけること
//SELECT gender, COUNT( * ) FROM users GROUP BY gender; これでNULLの指定が可能
//SELECT gender,count(COALESCE(gender,'NULL')) FROM users GROUP BY gender;
//NUll user count
$sqlNullCount = "
										SELECT
														gender,count(COALESCE(gender,'NULL')) as total_null_count
										FROM
														`gender_quiz`
										GROUP BY
														gender
									";

	$result = mysqli_query($CONNECTION,$sqlNullCount);
	$total_rows = mysqli_fetch_assoc($result);
	$nullcount = $total_rows["total_null_count"];
	// var_dump($othercount);
	// die();

	//--------------search--------------

	$search = "";
	$sdate = "";
	$ldate = "";
	$dateSearchStr = "";



		if(isset($_GET["start_date"]))
			{
				$sdate = $_GET["start_date"];
				echo "start_date :" .$sdate; echo"<br>\n";
			}

		if(isset($_GET["last_date"]))
			{
				$ldate = $_GET["last_date"];
				echo "last_date :" .$ldate; echo"<br>\n";
			}

	//--------------compair--------------
			//生成日の比較
			if(isset($_GET["search_btn_compair"]))
				{

          if(isset($sdate) || isset($ldate))
              {
                $sdate = $_GET["start_date"];
                $ldate = $_GET["last_date"];
              }


              $sqlRange = "select count(*) as total_rows from gender_quiz where created between '$sdate' and '$ldate' ";

              $sqlRange = "select id as id,gender as gender count(*) as total_rows from gender_quiz where created between '$sdate' and '$ldate' ";

              $range_result = mysqli_query($CONNECTION,$sqlRange);

              $total_rows = mysqli_fetch_assoc($range_result);
              // var_dump($sqlRange);
              // var_dump($range_result);
              // var_dump($total_rows);
              // die();
              print_r($total_rows);
          }





  		// 			$dateSearchStr2 = "";
  		// 			// if start date and last date were set, create query between those dates
  		// 			if(!empty($sdate) && !empty($ldate)) {
  		// 				$dateSearchStr = "
  		// 													and
  		// 															created
  		// 															between
  		// 																	'$sdate' and '$ldate'
  		// 												";
  		// 				$dateSearchStr2 = "
  		// 													where
  		// 															created
  		// 															between
  		// 																	'$sdate' and '$ldate'
  		// 												";
      //
  		// 			} else {
  		// 				// otherwise, leave variable empty.
  		// 				$dateSearchStr = "";
  		// 			}
      //
			// }
	//--------------compair--------------




	//--------------search--------------








 ?>

<!DOCTYPE html>
<html lang="ja" dir="ltr">
	<head>
		<meta charset="utf-8">
		<!-- bootstrap cdn -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


		<title></title>

		<style media="screen">

		</style>

	</head>
	<body>
		<!-- for jquery -->
          <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
          <!-- for ajax -->
         <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
         <!-- for cdn -->
         <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>



		<form class="" action="" method="get">
			<h5>start date :</h5>
			<input type="date" name="start_date" style="width:150px;" value="">
			<h5>last date :</h5>
			<input type="date" name="last_date" style="width:150px;" value="">
			<button type="submit" name="search_btn_compair">SEARCH_compair</button><br>

		</form>



		<?php

		 ?>

		<table style="width:100%" border="1">

			<thead>
				<tr style="width:100%">

					<th>total_user</th>
					<th>male</th>
					<th>female</th>
					<th>other</th>

				</tr>
			</thead>

			<tr>
				<td><?php echo $count; ?></td>
				<td><?php echo $malecount; ?></td>
				<td><?php echo $femalecount; ?></td>
				<td><?php echo $othercount; ?></td>
			</tr>

			<tr>
				<td><?php echo "Total_user : " .ceil(($count / $count)*100)."%"; ?></td>
				<td><?php echo "male_user : " .round($malePercent = ($malecount / $count)*100)."%"; ?></td>
				<td><?php echo "female_user : " .round($femalePercent = ($femalecount / $count)*100)."%"; ?></td>
				<td><?php echo "other_user : " .round($otherPercent = ($othercount / $count)*100)."%"; ?></td>
			</tr>

		</table>

    <table style="width:100%" border="1">

			<thead>
				<tr style="width:100%">

					<th>total_user</th>
					<th>male</th>
					<th>female</th>
					<th>other</th>

				</tr>

			</thead>

      <br><br>

      <?php while ($row = mysqli_fetch_assoc($range_result))
        {
       ?>

       <tr style="width:100%">


       <td><?php print_r($row["total_user"]); ?></td>
       <td><?php print_r($row["male"]); ?></td>
       <td><?php print_r($row["female"]); ?></td>
       <td><?php print_r($row["other"]); ?></td>

      </tr>

     <?php
        }
      ?>





	</body>
</html>
