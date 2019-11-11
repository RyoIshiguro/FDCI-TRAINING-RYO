<?php

echo "hello world";echo"<br>\n";
//クラス箱
class DATABASE {

    // - databaseの情報
    public $HOST = "localhost";
    public $USER = "Ryo";
    public $PASS = "sixdenpis";
    public $DATABASE = "fdc_jp_prog";

    // - sqlをいれる変数
    public $connection = null;

    //function使用時にこのクラスに強制接続させる
    function __construct () {
      //phpでいう$CONNECTIONがこれになる
        $this->connection = mysqli_connect(
            $this->HOST,
            $this->USER,
            $this->PASS,
            $this->DATABASE
        );
    }
    // - sqlを動かす
    public function execute_query ($query = ""){
        //これはmysqli_query($CONNECTION,sql);と同じ
        //形が違うだけ
        //mysqli_query(クラス内のconnectionとsqlを使う)
        return mysqli_query($this->connection, $query);
    }

}
//DATABASE　classを呼び出す
$db = new DATABASE();
// classの中のfunction execute_query()に対してselect * from usersを渡す
$db->execute_query("select * from users");
