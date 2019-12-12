<?php
include_once "db_info.php";
session_start();

$id=$_SESSION['id'];

$sql="SELECT * FROM `user` WHERE `id`='$id'";

$data=$pdo->query($sql)->fetch();

$acct=$data['acct'];
$dur=$_POST['dur'];
$corp=$_POST['corp'];
$posit=$_POST['posit'];
$jd=$_POST['jd'];

$sql="INSERT INTO `exp`(`acct`, `dur`, `corp`, `posit`, `jd`) 
VALUES ('$acct','$dur','$corp','$posit','$jd')";

echo $sql;
$pdo->exec($sql);

header("location:../admin.php?p=ex");

?>