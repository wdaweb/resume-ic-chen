<?php
include_once "db_info.php";

$see=($_POST['upt_chked']=="true")?1:0;
$fb=$_POST['upt_fb'];
$ig=$_POST['upt_ig'];
$linkedin=$_POST['upt_linkedin'];
$github=$_POST['upt_github'];
$youtube=$_POST['upt_youtube'];
$twitter=$_POST['upt_twitter'];
$id=$_POST['upt_id'];

$sql="UPDATE `social_m` SET `see`='$see',`fb`='$fb',`ig`='$ig',`linkedin`='$linkedin',`github`='$github',`youtube`='$youtube',`twitter`='$twitter' WHERE `id`='$id'";

$pdo->exec($sql);
?>