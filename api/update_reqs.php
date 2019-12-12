<?php
include_once "db_info.php";

$see=($_POST['upt_chked']=="true")?1:0;
$reqs_posit=$_POST['upt_reqs_posit'];
$reqs_jd=$_POST['upt_reqs_jd'];
$reqs_time=$_POST['upt_reqs_time'];
$reqs_place=$_POST['upt_reqs_place'];
$reqs_type=$_POST['upt_reqs_type'];
$reqs_pay=$_POST['upt_reqs_pay'];
$id=$_POST['upt_id'];

$sql="UPDATE `reqs` SET `see`='$see',
`reqs_posit`='$reqs_posit',
`reqs_jd`='$reqs_jd',
`reqs_time`='$reqs_time',
`reqs_place`='$reqs_place',
`reqs_type`='$reqs_type',
`reqs_pay`='$reqs_pay'
 WHERE `id`='$id'";

echo $sql;

$pdo->exec($sql);
?>