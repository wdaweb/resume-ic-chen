<?php
include_once "db_info.php";
session_start();

$id=$_SESSION['id'];
$psw=$_POST['psw'];
$name=$_POST['name'];
$gender=$_POST['gender'];
$btd=$_POST['btd'];
$email=$_POST['email'];
$tel_cell=$_POST['tel_cell'];
$tel_home=$_POST['tel_home'];
$addr=$_POST['addr'];
$upt_time=date("Y-m-d H-i-s");

$sql="UPDATE `user` SET `psw`='$psw',`name`='$name',`gender`='$gender',`btd`='$btd',`email`='$email',`tel_cell`='$tel_cell',`tel_home`='$tel_home',`addr`='$addr',`upt_time`='$upt_time' WHERE `id`='$id'";

$pdo->exec($sql);
?>