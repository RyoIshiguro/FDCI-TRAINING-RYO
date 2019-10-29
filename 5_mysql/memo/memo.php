<?php

  //行の追加 auto_incrementのidはカラムを入れると指定しないとエラーが返ってくるので入れない。
  //nullにチェックを入れているカラムは指定をしないとnullが入る

  //cast( now() as date))　これは現在日付がほしい場合
  //cast ( now() as datetime) 　これは現在時刻がほしい場合

  //cast関数を使います。
  //日付の場合は、typeにdateを指定します。00:00になる
  //日時（時刻入り）の場合は、typeにdatetimeを指定します。

  //insert into `table_name` ('','') values ('','');

//int > varcher >text 処理の速さ


  $sql = "INSERT INTO `actor`(`first_name`, `last_name`, `last_update`) VALUES ('RYO','ISHIGURO',cast( now() as date))";
  $sql = "INSERT INTO `actor`(`first_name`, `last_name`, `last_update`) VALUES ('RYO','ISHIGURO',cast( now() as datetime))";


  //行の検索　SELECT
  //テーブルの全行を表示する

  $sqlSelect = "select * from `actor`";

  //特定の列を表示
  //calam from `table_name`;
  $sqlSelect = "select actor_id,first_name from `actor`";

  //重複を省く
  //distinct が重複を省く命令   calam from `table_name`;
  $sqlSelect = "select distinct first_name from `actor` ";


  //条件を指定して検索　WHERE
  //条件を絞って一致した一部の行のみ表示してみる

  //  `table_name` where calam where 条件
  $sqlSelect = " select * from `actor` where first_name = 'RYO' ";

  //条件式

  // A = B  AとBは等しい
  // A > B  AはBより大きい
  // A < B  AはBより小さい
  // A >= B  AはB以上
  // A <= B  AはB以下
  // A <> B  AとBは等しくない

  //actor_id は50以下 を検索
  $sqlSelect = "select from `actor` where actor_id <= 50";

  //actor_id は50以上 を検索
  $sqlSelect = "select from `actor` where actor_id >= 50";


  //文字列の検索　LIKE
  //文字列を検索する場合にはwhereを使うことはできない

  // %はLIKEは　＝や＞と同じように演算子

  // 検索したいものに％を入れると％はどんな文字でも当てはまるので雑な検索ができる
  // 検索したいものの前に％を入れると、Rの前に文字が入りRを含むもの　として検索する
  // 検索したいものの後に％を入れると、Rの前に文字が入りRを含むもの　として検索する



  $sqlSelect = "select * from `actor` where first_name like '%R' ";
  $sqlSelect = "select * from `actor` where first_name like 'R%' ";


  //複数の条件の検索　AND　OR　BETWEEN　IN

  //AND 両方の条件が当てはまらないといけない
  //actor_idが１以上で３以下のものを検索
  $sqlSelect = "select * from `actor` where actor_id >= 1 and actor_id <= 3";


  //BETWEEN で書くこともできる １以上で３以下のものを検索
 $sqlSelect = "select * from actor where actor_id between 1 and 3";


 //文字から文字で検索も可能　a~r
 $sqlSelect = "select * from user where name between 'a' and 'r' ";


 //or 片方だけ当てはまれば検索ができる
 // actor_idが１かfirst_nameが３のもののみ検索する
 $sqlSelect = "select * from `actor` where actor_id = 1 or first_name = 'RYO'";


//一つの列でどれかの値が取れればいいような検索は　IN
//actor_idでINを取ってくる1,3,5 を取ってくる
//inはいくつも値を指定できる
//orより書くのがシンプル
 $sqlSelect = "select * from actor where actor_id in (1,3,5)";


 //逆に一致しないものを取ってくる場合　NOT IN を使用する
 //レコード数が増えてくると「NOT IN」は非常に重い処理なので注意
$sqlSelect ="select * from `actor` where actor_id not in (1,3,5)";

//IN をサブクエリとして使う
//使い方と目的がわからないから聞く
$sqlSelect ="select * from `actor` WHERE actor_id IN (SELECT actor_id from `actor` WHERE first_name = 'RYO')";


//　NULLの検索
// is null　を使わないとnullの検索はできない
$sqlSelect ="select * from `address` where address2 is null";

// is not null はnull以外を検索になる
$sqlSelect ="select * from `address` where address2 is not null";

// not はlike や between にも使える


//行の変更　update
//actortableのid203のfirst_nameとlast_nameをアップデートした。複数指定の場合はandではなく , カンマを使う
//where には　プライマリーキーを指定することで確実な指定ができる
//update と delete は whereをつけないと全行が対象となってしまうので注意。
$sqlSelect ="update `actor` set first_name = 'RYO',last_name = 'ISHIGURO' where actor_id = 203";


//行の消去
//update と delete は whereをつけないと全行が対象となってしまうので注意。
$sqlSelect ="delete from `actor` where actor_id = 203 ";


//並び替え order by
//並び替え 昇順　ASC
//並び替え 降順　DESC
//SQLは指定しない限りどのような順序で表示されるかは保証されない。
$sqlSelect ="select actor_id from `actor` order by actor_id desc";


//複数キーでの並び替え
//first_nameを昇順で並べる、値が同じもの（同性同名とか）があれば次の条件を指定して並び替えの順番を指定する
//first_nameを昇順で並べる　同じ値だった場合は　actor_idを降順で表示する
$sqlSelect ="select * from `actor` order by first_name asc,actor_id desc";


//計算と関数
//商品名と単価という列があったとして、その二つを選択した。単価＊２としたので単価列のものは２倍で出力される
$sqlSelect ="slect sname , tanka*2 from `shouhin`";

//別AS
//as で　別名に変更が可能 tanka が　nibaiになって出力される
$sqlSelect ="select sname,tanka*2 as nibai from `shouhin`";

//関数
//四捨五入 round
$sqlSelect ="select round(tanka*0.03) from `shouhin`";

//floor(値)　値を小数点以下切り捨て
$sqlSelect ="select floor(tanka*0.03) from `shouhin`";

//ceil(値)　値を小数点以下切り上げ
$sqlSelect ="select ciel;(tanka*0.03) from `shouhin`";


//文字列関数
//文字列に使える関数　SUBSTR
//first_nameの最初の２文字を取得
$sqlSelect ="select substr(first_name,1,2) from `actor`";


//文字列の長さを取得　LENGTH
$sqlSelect ="select length(first_name) from `actor`";


//現在の日時　curdate()
//現在の日時　curtime()
//現在の日時　now()
//年を取り出す　year(値)
//月を取り出す　month(値)
//日を取り出す　day(値)

//今日の日付を出す
$sqlSelect ="select curdate()";


//売上テーブルがあったとして今日リンゴが2個売れた場合以下のような行を追加する
$sqlSelect ="insert into uriage(sid,kosu,hi) values(1,2,date('now','localtime'))";


//売上テーブルの日の年のみを表示
$sqlSelect ="select year(値) from `uriage`";


//集計関数
//合計　SUM
//最大値　MAX
//最小値　MIN
//平均値　AVG
//個数　COUNT

//tankaの合計を表示
$sqlSelect ="select sum(tanka) from `shouhin`";

//　＊を指定する場合と列名を指定する場合の違い　列名を指定するとNULLが含まれない

//また　distinctを列名の前につけると調伏したものを数えなくなる
$sqlSelect ="select count(distinct first_name) from `actor`";



//グループ化 group by
//データによって分けて合計したい場合に使う
$sqlSelect ="select sum(列名) from テーブル名 group by グループ分けする列名";
//❇︎group by はwhereの後、order by の前に記述します。


$sqlSelect ="select hi , sum(kosu) from uriage group by hi";

//集計結果に条件付け　having
//計算後の合計値に対して５以上のものを表示したい　条件を満たすものだけを抜き出すのがhaving
$sqlSelect ="select hi , sum(kosu) from uriage group by hi having sum(kosu) >= 5";

//havingとwhereの違い
//whereは集計前に行を絞り込む
//havingは集計後に行を絞り込む


//テーブルの結合
//クロス結合　単純に二つのテーブルの全ての行を組み合わせる。　見にくくてほぼ意味がない
$sqlSelect ="select actor_id from `actor`,`address`";
$sqlSelect ="select * from `actor`,`address`";


//where結合
//必要なもののみに絞り込む
$sqlSelect ="select * from `actor`,`address` where actor.actor_id = address.address_id";

//同じid同士を結合して絞る。そしてand address_id = 1　でid１を指定した形
$sqlSelect ="select * from `actor`,`address` where actor.actor_id = address.address_id and address_id = 1";


//join結合
$sqlSelect =""























 ?>
