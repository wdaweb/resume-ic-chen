<?php
include_once "db_info.php";
session_start();

$id=$_SESSION['id'];

$sql="SELECT * FROM `user` WHERE `id`='$id'";

$data=$pdo->query($sql)->fetch();

$acct=$data['acct'];
$grad_t=$_POST['grad_t'];
$sch=$_POST['sch'];
$dept=$_POST['dept'];
$grad_st=$_POST['grad_st'];

$sql="INSERT INTO `edu`(`acct`, `grad_t`, `sch`, `dept`, `grad_st`) 
VALUES ('$acct','$grad_t','$sch','$dept','$grad_st')";

echo $sql;
$pdo->exec($sql);

header("location:../admin.php?p=ed");

?>