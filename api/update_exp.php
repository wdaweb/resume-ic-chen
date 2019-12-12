<?php
include_once "db_info.php";

$see=($_POST['upt_chked']=="true")?1:0;
$dur=$_POST['upt_dur'];
$corp=$_POST['upt_corp'];
$posit=$_POST['upt_posit'];
$jd=$_POST['upt_jd'];
$id=$_POST['upt_id'];

$sql="UPDATE `exp` SET `see`='$see',`dur`='$dur',`corp`='$corp',`posit`='$posit',`jd`='$jd' WHERE `id`='$id'";

echo $sql;

$pdo->exec($sql);
?>