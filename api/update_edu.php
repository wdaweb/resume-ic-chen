<?php
include_once "db_info.php";

$see=($_POST['upt_chked']=="true")?1:0;
$grad_t=$_POST['upt_grad_t'];
$sch=$_POST['upt_sch'];
$dept=$_POST['upt_dept'];
$grad_st=$_POST['upt_grad_st'];
$id=$_POST['upt_id'];

$sql="UPDATE `edu` SET `see`='$see',`grad_t`='$grad_t',`sch`='$sch',`dept`='$dept',`grad_st`='$grad_st' WHERE `id`='$id'";

echo $sql;

$pdo->exec($sql);
?>