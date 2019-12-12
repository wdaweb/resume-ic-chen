<?php
include_once "db_info.php";

$see=($_POST['upt_chked']=="true")?1:0;
$cat=$_POST['cat'];
$skill=$_POST['skill'];
$level=$_POST['level'];
$id=$_POST['upt_id'];

$sql="UPDATE `skill` SET `see`='$see',`cat`='$cat',`skill`='$skill',`level`='$level' WHERE `id`='$id'";

echo $sql;

$pdo->exec($sql);
?>