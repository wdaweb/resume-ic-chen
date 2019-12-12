<?php
include_once "db_info.php";
session_start();

$id=$_SESSION['id'];

$sql="SELECT * FROM `user` WHERE `id`='$id'";

$data=$pdo->query($sql)->fetch();

$acct=$data['acct'];

$sql="SELECT * FROM `s_intro` WHERE `acct`='$acct'";

$s_intro=$pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);

$num=0;
foreach($s_intro as $value){
$s_intro_id=$value['id'];
$s_intro=$value['s_intro'];
$bio=$value['bio'];
$checked=($value['see']==1)?"checked":"";
$num++;

echo "<div class='card m-1'>";
echo "<div class='card-body text-left'>";

// 第一列
echo "<div class='form-row'>";
echo "    <div class='form-group col-md-12'>";
echo "        <div class='form-check'>";
echo "            <input class='form-check-input' name='see' type='radio' id='see$num' $checked>";
echo "            <label class='form-check-label' name='see' for='see$num'>在履歷中顯示</label>";
echo "        </div>";
echo "    </div>";
echo "</div>";

// 第二列
echo "<div class='form-row'>";
echo "    <div class='form-group col-md-12'>";
echo "        <label for='s_intro'>自我介紹</label>";
echo "        <textarea class='form-control' name='s_intro' rows='5'>$s_intro</textarea>";
echo "    </div>";
echo "</div>";

// 第三列
echo "<div class='form-row'>";
echo "    <div class='form-group col-md-12'>";
echo "        <label for='bio'>自傳</label>";
echo "        <textarea class='form-control' name='bio' rows='10'>$bio</textarea>";
echo "    </div>";
echo "</div>";

// 按鈕列
echo "    <input type='button' value='更新' class='upt-btn btn btn-primary' id='$s_intro_id'>";
echo "    <input type='button' value='刪除' class='del-btn btn btn-primary'>";

// 收尾標籤
echo "</div>";
echo "</div>";
}
?>
