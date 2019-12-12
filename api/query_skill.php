<?php
include_once "db_info.php";
session_start();

$id=$_SESSION['id'];

$sql="SELECT * FROM `user` WHERE `id`='$id'";

$data=$pdo->query($sql)->fetch();

$acct=$data['acct'];

$sql="SELECT * FROM `skill` WHERE `acct`='$acct'";

$skill_set=[
    "<option>財務會計</option>",
    "<option>人事/行政/法務</option>",
    "<option>管理類</option>",
    "<option>金融保險</option>",
    "<option>行銷/企劃</option>",
    "<option>客服/門市/業務/貿易</option>",
    "<option>美容美髮</option>",
    "<option>餐飲旅遊</option>",
    "<option>資訊網路</option>",
    "<option>電子電機</option>",
    "<option>化學/化工/醫藥</option>",
    "<option>交通運輸</option>",
    "<option>生產/製程</option>",
    "<option>設計/美工</option>",
    "<option>語言</option>"
];

$ability=$pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);

$num=0;
foreach($ability as $value){
$skill_id=$value['id'];
$checked=($value['see']==1)?"checked":"";
$cat=$value['cat'];
$skill=$value['skill'];
$level=$value['level'];
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
echo "        <label for='inputCat'>類別</label>";

// 排列14種選項
echo "<select id='inputCat' class='form-control'>";
echo "<option selected>$cat</option>";
switch($cat){
    case "人事/行政/法務":
    $skill_set[1]="";
    foreach($skill_set as $v){
        echo $v;
    }
    break;
    case "管理類":
    $skill_set[2]="";
    foreach($skill_set as $v){
        echo $v;
    }
    break;
    case "金融保險":
    $skill_set[3]="";
    foreach($skill_set as $v){
        echo $v;
    }
    break;
    case "行銷/企劃":
    $skill_set[4]="";
    foreach($skill_set as $v){
        echo $v;
    }
    break;
    case "客服/門市/業務/貿易":
    $skill_set[5]="";
    foreach($skill_set as $v){
        echo $v;
    }
    break;
    case "美容美髮":
    $skill_set[6]="";
    foreach($skill_set as $v){
        echo $v;
    }
    break;
    case "餐飲旅遊":
    $skill_set[7]="";
    foreach($skill_set as $v){
        echo $v;
    }
    break;
    case "資訊網路":
    $skill_set[8]="";
    foreach($skill_set as $v){
        echo $v;
    }
    break;
    case "電子電機":
    $skill_set[9]="";
    foreach($skill_set as $v){
        echo $v;
    }
    break;
    case "化學/化工/醫藥":
    $skill_set[10]="";
    foreach($skill_set as $v){
        echo $v;
    }
    break;
    case "交通運輸":
    $skill_set[11]="";
    foreach($skill_set as $v){
        echo $v;
    }
    break;
    case "生產/製程":
    $skill_set[12]="";
    foreach($skill_set as $v){
        echo $v;
    }
    break;
    case "設計/美工":
    $skill_set[13]="";
    foreach($skill_set as $v){
        echo $v;
    }
    break;
    case "語言":
    $skill_set[14]="";
    foreach($skill_set as $v){
        echo $v;
    }
    break;
    default:
    $skill_set[0]="";
    foreach($skill_set as $v){
        echo $v;
    }
    break;
}
echo "</select>";

echo "    </div>";
echo "</div>";

// 第三列
echo "<div class='form-row'>";
echo "    <div class='form-group col-md-12'>";
echo "        <label for='inputSkill'>技能</label>";
echo "        <input type='text' class='form-control' value='$skill'>";
echo "    </div>";
echo "</div>";

// 第四列
echo "<div class='form-row'>";
echo "    <div class='form-group col-md-12'>";
echo "        <label for='inputLevel'>程度</label>";
echo "        <input type='text' class='form-control' value='$level'>";
echo "    </div>";
echo "</div>";

// 按鈕列
echo "    <input type='button' value='更新' class='upt-btn btn btn-primary' id='$skill_id'>";
echo "    <input type='button' value='刪除' class='del-btn btn btn-primary'>";

// 收尾標籤
echo "</div>";
echo "</div>";
}
?>
