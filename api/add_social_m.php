<?php
include_once "db_info.php";
session_start();

$id=$_SESSION['id'];

$sql="SELECT * FROM `user` WHERE `id`='$id'";

$data=$pdo->query($sql)->fetch();

$acct=$data['acct'];
$fb=$_POST['fb'];
$ig=$_POST['ig'];
$linkedin=$_POST['linkedin'];
$github=$_POST['github'];
$youtube=$_POST['youtube'];
$twitter=$_POST['twitter'];

$sql="INSERT INTO `social_m`(`acct`, `fb`, `ig`, `linkedin`, `github`, `youtube`, `twitter`) VALUES ('$acct','$fb','$ig','$linkedin','$github','$youtube','$twitter')";

echo $sql;
$pdo->exec($sql);

header("location:../admin.php?p=sm");

?>