<?php include_once "db.php";


$_POST['acc']=$_SESSION['login'];
$_POST['items']=serialize($_SESSION['cart']);
$_POST['no']=date("Ymd").rand(100000,999999);

$Order->save($_POST);

//清空購物車(依題意不須製作)
unset($_SESSION['cart']);

to('../index.php');