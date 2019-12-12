<?php
include_once "db_info.php";
session_start();

$id=$_SESSION['id'];

$sql="SELECT * FROM `user` WHERE `id`='$id'";

$data=$pdo->query($sql)->fetch();

$acct=$data['acct'];

$sql="SELECT * FROM `exp` WHERE `acct`='$acct'";

$exp=$pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);

$num=0;
foreach($exp as $value){
$exp_id=$value['id'];
$checked=($value['see']==1)?"checked":"";
$dur=$value['dur'];
$corp=$value['corp'];
$posit=$value['posit'];
$jd=$value['jd'];
$num++;

echo "<div class='card m-1'>";
echo "<div class='card-body text-left'>";

// 第一列
echo "<div class='form-row'>";
echo "    <div class='form-group col-md-12'>";
echo "        <div class='form-check'>";
echo "            <input class='form-check-input' type='checkbox' id='see$num' $checked>";
echo "            <label class='form-check-label' for='see$num'>在履歷中顯示</label>";
echo "        </div>";
echo "    </div>";
echo "</div>";

// 第二列
echo "<div class='form-row'>";
echo "    <div class='form-group col-md-12'>";
echo "        <label for='inputDur'>任職期間</label>";
echo "        <input type='text' class='form-control' value='$dur'>";
echo "    </div>";
echo "</div>";

// 第三列
echo "<div class='form-row'>";
echo "    <div class='form-group col-md-7'>";
echo "        <label for='inputCorp'>公司</label>";
echo "        <input type='text' class='form-control' value='$corp'>";
echo "    </div>";
echo "    <div class='form-group col-md-5'>";
echo "        <label for='inputPosit'>職稱</label>";
echo "        <input type='text' class='form-control' value='$posit'>";
echo "    </div>";
echo "</div>";

// 第四列
echo "<div class='form-row'>";
echo "    <div class='form-group col-md-12'>";
echo "        <label for='inputJD'>工作說明</label>";
echo "        <textarea class='form-control' name='jd' rows='5'>$jd</textarea>";
echo "    </div>";
echo "</div>";

// 按鈕列
echo "    <input type='button' value='更新' class='upt-btn btn btn-primary' id='$exp_id'>";
echo "    <input type='button' value='刪除' class='del-btn btn btn-primary'>";

// 收尾標籤
echo "</div>";
echo "</div>";
}
?>
