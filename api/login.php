<?php
include_once "db_info.php";
session_start();

$acct=$_POST['acct'];
$psw=$_POST['psw'];

$sql="SELECT * FROM `user` 
WHERE `acct`='$acct' AND `psw`='$psw'";

echo $sql;

$data=$pdo->query($sql)->fetch();

if(!empty($data['name'])) {
    $_SESSION['login']=1;
    $_SESSION['id']=$data['id'];
    header("location:../admin.php");
} else {
    $_SESSION['login']=0;
    header("location:../admin.php");
}

?>