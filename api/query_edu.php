<?php
include_once "db_info.php";
session_start();

$id=$_SESSION['id'];

$sql="SELECT * FROM `user` WHERE `id`='$id'";

$data=$pdo->query($sql)->fetch();

$acct=$data['acct'];

$sql="SELECT * FROM `edu` WHERE `acct`='$acct'";

$edu=$pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);

$num=0;
foreach($edu as $value){
$edu_id=$value['id'];
$grad_t=$value['grad_t'];
$checked=($value['see']==1)?"checked":"";
$sch=$value['sch'];
$dept=$value['dept'];
$grad_st=$value['grad_st'];
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
echo "    <div class='form-group col-md-9'>";
echo "        <label for='inputGrad_t'>就讀時間</label>";
echo "        <input type='text' class='form-control' value='$grad_t'>";
echo "    </div>";
echo "    <div class='form-group col-md-3'>";
echo "        <label for='inputGrad_st'>畢業狀態</label>";

// 排列四種選項
echo "<select id='inputGrad_st' class='form-control'>";
switch($grad_st){
    case "肆業":
    echo "<option selected>肆業</option>";
    echo "<option>修業</option>";
    echo "<option>結業</option>";
    echo "<option>畢業</option>";
    break;
    case "修業":
    echo "<option selected>修業</option>";
    echo "<option>結業</option>";
    echo "<option>畢業</option>";
    echo "<option>肆業</option>";
    break;
    case "結業":
    echo "<option selected>結業</option>";
    echo "<option>畢業</option>";
    echo "<option>肆業</option>";
    echo "<option>修業</option>";
    break;
    default:
    echo "<option selected>畢業</option>";
    echo "<option>肆業</option>";
    echo "<option>修業</option>";
    echo "<option>結業</option>";
    break;
}
echo "</select>";

echo "    </div>";
echo "</div>";

// 第三列
echo "<div class='form-row'>";
echo "    <div class='form-group col-md-12'>";
echo "        <label for='inputSch'>學校</label>";
echo "        <input type='text' class='form-control' value='$sch'>";
echo "    </div>";
echo "</div>";

// 第四列
echo "<div class='form-row'>";
echo "    <div class='form-group col-md-12'>";
echo "        <label for='inputDept'>科系</label>";
echo "        <input type='text' class='form-control' value='$dept'>";
echo "    </div>";
echo "</div>";

// 按鈕列
echo "    <input type='button' value='更新' class='upt-btn btn btn-primary' id='$edu_id'>";
echo "    <input type='button' value='刪除' class='del-btn btn btn-primary'>";

// 收尾標籤
echo "</div>";
echo "</div>";
}
?>
