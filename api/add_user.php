<?php
include_once "db_info.php";
session_start();

$acct=$_POST['acct'];
$psw=$_POST['psw'];
$name=$_POST['name'];
$gender=$_POST['gender'];
$btd=$_POST['btd'];
$email=$_POST['email'];
$tel_cell=$_POST['tel_cell'];
$tel_home=$_POST['tel_home'];
$addr=$_POST['addr'];

$sql="INSERT INTO `user`(`acct`, `psw`, `name`, `gender`, `btd`, `email`, `tel_cell`, `tel_home`, `addr`) 
VALUES ('$acct', '$psw', '$name', '$gender', '$btd', '$email', '$tel_cell', '$tel_home', '$addr')";

// echo $sql;
$chk=$pdo->exec($sql);

if($chk==1) {
    $_SESSION['login']=1;

    // 取出個人資料id，以便後續抓取資料
    $sql="SELECT * FROM `user` WHERE `acct`='$acct' AND `psw`='$psw'";
    $data=$pdo->query($sql)->fetch();
    $_SESSION['id']=$data['id'];

    header("location:../admin.php");
} else {
    $_SESSION['login']=2;
    header("location:../admin.php");
}

?>