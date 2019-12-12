<?php
include_once "db_info.php";
session_start();

if(!empty($_FILES) AND $_FILES['img']['error']==0) {
    $id=$_SESSION['id'];

    $sql="SELECT * FROM `user` WHERE `id`='$id'";
    $data=$pdo->query($sql)->fetch();

    $filename=$_FILES['img']['name'];
    $acct=$data['acct'];
    $alt=$_POST['alt'];

    $sql="INSERT INTO `img`(`acct`,`filename`,`alt`) 
    VALUES ('$acct','$filename','$alt')";

    echo $sql;
    $pdo->exec($sql);
    move_uploaded_file($_FILES['img']['tmp_name'],"../img/".$filename);
}

header("location:../admin.php?p=im");

?>