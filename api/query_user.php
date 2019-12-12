<?php
include_once "db_info.php";
session_start();

$id=$_SESSION['id'];

$sql="SELECT * FROM `user` 
WHERE `id`='$id'";

$data=$pdo->query($sql)->fetch();

echo json_encode($data);
?>