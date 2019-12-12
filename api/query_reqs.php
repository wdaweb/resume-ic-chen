<?php
include_once "db_info.php";
session_start();

$id=$_SESSION['id'];

$sql="SELECT * FROM `user` WHERE `id`='$id'";

$data=$pdo->query($sql)->fetch();

$acct=$data['acct'];

$sql="SELECT * FROM `reqs` WHERE `acct`='$acct'";

$time_set=[
    "<option>隨時</option>",
    "<option>錄取後一週內</option>",
    "<option>錄取後兩週內</option>",
    "<option>錄取後三週內</option>",
    "<option>錄取後一個月內</option>",
    "<option>其他</option>"
];

$reqs=$pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);

$num=0;
foreach($reqs as $value){
$checked=($value['see']==1)?"checked":"";
$reqs_posit=$value['reqs_posit'];
$reqs_jd=$value['reqs_jd'];
$reqs_time=$value['reqs_time'];
$reqs_place=$value['reqs_place'];
$reqs_type=$value['reqs_type'];
$reqs_pay=$value['reqs_pay'];
$reqs_id=$value['id'];
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
echo "        <label for='inputReqs_posit'>期望職務</label>";
echo "        <input type='text' class='form-control' value='$reqs_posit'>";
echo "    </div>";
echo "</div>";

// 第三列
echo "<div class='form-row'>";
echo "    <div class='form-group col-md-12'>";
echo "        <label for='inputReqs_jd'>工作描述</label>";
echo "        <textarea class='form-control' name='reqs_jd' rows='3'>$reqs_jd</textarea>";
echo "    </div>";
echo "</div>";

// 第四列
// 排列選項
echo "<div class='form-row'>";
// 預設顯示
echo "  <div class='form-group col-md-12' id='reqs_t$num'>";
echo "    <label for='inputReqs_t$num'>可上班時間</label>";
echo "    <select id='inputReqs_t$num' class='inputReqs_t1 form-control'>";
echo "    <option selected>$reqs_time</option>";
switch($reqs_time){
    case "錄取後一週內":
    foreach($time_set as $v){
        if($v!=$time_set[1])
        echo $v;
    }
    break;
    case "錄取後兩週內":
    foreach($time_set as $v){
        if($v!=$time_set[2])
        echo $v;
    }
    break;
    case "錄取後三週內":
    foreach($time_set as $v){
        if($v!=$time_set[3])
        echo $v;
    }
    break;
    case "錄取後一個月內":
    foreach($time_set as $v){
        if($v!=$time_set[4])
        echo $v;
    }
    break;
    case "其他":
    foreach($time_set as $v){
        if($v!=$time_set[5])
        echo $v;
    }
    break;
    case "隨時":
    foreach($time_set as $v){
        if($v!=$time_set[0])
        echo $v;
    }
    break;
    default:
    foreach($time_set as $v){
        echo $v;
    }
    break;
}
echo "    </select>";
echo "  </div>";
// 選「其他」後顯示，預設隱藏
echo "  <div class='form-group col-md-12' id='reqs_t0$num' style='display:none;'>";
echo "    <label for='inputReqs_t0$num'>可上班時間</label>";
echo "    <input type='text' id='inputReqs_t0$num' class='inputReqs_t2 form-control'>";
echo "  </div>";
echo "</div>";

// 第五列
echo "<div class='form-row'>";
echo "    <div class='form-group col-md-12'>";
echo "        <label for='inputReqs_place'>期望工作地點</label>";
echo "        <input type='text' class='form-control' value='$reqs_place'>";
echo "    </div>";
echo "</div>";

// 第六列
echo "<div class='form-row'>";
echo "    <div class='form-group col-md-6'>";
echo "        <label for='inputReqs_type$num'>期望工作性質</label>";
echo "        <select id='inputReqs_type$num' class='form-control'>";
echo "        <option selected>$reqs_type</option>";
// 放入選項
switch($reqs_type){
    case "兼職":
    echo "<option>全職</option>";
    break;
    default:
    echo "<option>兼職</option>";
    break;
}
echo "        </select>";
echo "    </div>";

echo "    <div class='form-group col-md-6'>";
echo "        <label for='inputReqs_pay'>期望薪資</label>";
echo "        <input type='text' class='form-control' value='$reqs_pay'>";
echo "    </div>";
echo "</div>";

// 按鈕列
echo "    <input type='button' value='更新' class='upt-btn btn btn-primary' id='$reqs_id'>";
echo "    <input type='button' value='刪除' class='del-btn btn btn-primary'>";

// 收尾標籤
echo "</div>";
echo "</div>";
}

?>
