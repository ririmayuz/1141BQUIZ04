<?php include_once "db.php";

//加入今天的日期
if(!isset($_POST['id'])){
    $_POST['regdate']=date("Y-m-d");
}
$User->save($_POST);

//正式寫法每個欄位都要檢查是否合法及有值