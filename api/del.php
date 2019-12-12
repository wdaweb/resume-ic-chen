<?php
include_once "db_info.php";

$id=$_POST['del_id'];
$table=$_POST['table'];

$sql="DELETE FROM `$table` WHERE `id`='$id'";

echo $sql;

$pdo->exec($sql);
?>
