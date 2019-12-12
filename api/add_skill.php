<?php
include_once "db_info.php";
session_start();

$id=$_SESSION['id'];

$sql="SELECT * FROM `user` WHERE `id`='$id'";

$data=$pdo->query($sql)->fetch();

$acct=$data['acct'];
$cat=$_POST['cat'];
$skill=$_POST['skill'];
$level=$_POST['level'];

$sql="INSERT INTO `skill`(`acct`, `cat`, `skill`, `level`) 
VALUES ('$acct','$cat','$skill','$level')";

echo $sql;
$pdo->exec($sql);

header("location:../admin.php?p=sk");

?>