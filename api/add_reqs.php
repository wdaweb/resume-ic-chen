<?php
include_once "db_info.php";
session_start();

$id=$_SESSION['id'];

$sql="SELECT * FROM `user` WHERE `id`='$id'";

$data=$pdo->query($sql)->fetch();

$acct=$data['acct'];
$reqs_posit=$_POST['reqs_posit'];
$reqs_jd=$_POST['reqs_jd'];
$reqs_time=($_POST['reqs_time1']=="其他")?$_POST['reqs_time2']:$_POST['reqs_time1'];
$reqs_place=$_POST['reqs_place'];
$reqs_type=$_POST['reqs_type'];
$reqs_pay=$_POST['reqs_pay'];

$sql="INSERT INTO `reqs`(`acct`, `reqs_posit`, `reqs_jd`, `reqs_time`, `reqs_place`, `reqs_type`, `reqs_pay`) 
VALUES ('$acct','$reqs_posit','$reqs_jd','$reqs_time','$reqs_place','$reqs_type','$reqs_pay')";

echo $sql;
$pdo->exec($sql);

header("location:../admin.php?p=re");

?>