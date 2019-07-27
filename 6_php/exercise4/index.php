<?php
  echo "----------------1-------------------";
  echo "<br>\n";
  echo "<br>\n";
  $age = array("Ryo" => "25","Yusuke" => "25","Hitomi"=>"27","Niki" => "27");

  //連想配列はforeachで回す
  foreach ($age as $key => $values) {
    echo "$key is $values years old";
    echo "<br>\n";
    echo "<br>\n";
  }


  echo "----------------2-------------------";
  echo "<br>\n";
  echo "<br>\n";

  //- 任意の[number]値を持つ変数を作成します
 // - 数字が15より小さいかどうかを確認し、数字に2を掛けます。数字が15以上で、数字が20以下の場合は、数字に10を加えます。 20より大きい任意の数、2で割る

  $num = 15;

  if ($num >= 15) {
    $num = $num + 10;
    echo "The new number is $num";
    echo "<br>\n";
    echo "<br>\n";
  } elseif($num <= 20) {
    $num = $num + 10;
    echo "The new number is $num";
    echo "<br>\n";
    echo "<br>\n";
  } else{
    $num = $num * 2;
    echo "The new number is $num";
    echo "<br>\n";
    echo "<br>\n";
  }
