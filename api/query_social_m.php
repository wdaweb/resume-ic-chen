<?php
include_once "db_info.php";
session_start();

$id=$_SESSION['id'];

$sql="SELECT * FROM `user` WHERE `id`='$id'";

$data=$pdo->query($sql)->fetch();

$acct=$data['acct'];

$sql="SELECT * FROM `social_m` WHERE `acct`='$acct'";

$s_m=$pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);

// print_r($s_m);
$num=0;
foreach($s_m as $value){
$s_m_id=$value['id'];
$checked=($value['see']==1)?"checked":"";
$s_m_fb=$value['fb'];
$s_m_ig=$value['ig'];
$s_m_linkedin=$value['linkedin'];
$s_m_github=$value['github'];
$s_m_youtube=$value['youtube'];
$s_m_twitter=$value['twitter'];
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
echo "        <label for='inputFB'>FB</label>";
echo "        <input type='text' class='form-control' value='$s_m_fb'>";
echo "    </div>";
echo "</div>";

// 第三列
echo "<div class='form-row'>";
echo "    <div class='form-group col-md-12'>";
echo "        <label for='inputIG'>IG</label>";
echo "        <input type='text' class='form-control' value='$s_m_ig'>";
echo "    </div>";
echo "</div>";

// 第四列
echo "<div class='form-row'>";
echo "    <div class='form-group col-md-12'>";
echo "        <label for='inputLinkedIn'>LinkedIn</label>";
echo "        <input type='text' class='form-control' value='$s_m_linkedin'>";
echo "    </div>";
echo "</div>";

// 第五列
echo "<div class='form-row'>";
echo "    <div class='form-group col-md-12'>";
echo "        <label for='inputGitHub'>GitHub</label>";
echo "        <input type='text' class='form-control' value='$s_m_github'>";
echo "    </div>";
echo "</div>";

// 第六列
echo "<div class='form-row'>";
echo "    <div class='form-group col-md-12'>";
echo "        <label for='inputYoutube'>Youtube</label>";
echo "        <input type='text' class='form-control' value='$s_m_youtube'>";
echo "    </div>";
echo "</div>";

// 第七列
echo "<div class='form-row'>";
echo "    <div class='form-group col-md-12'>";
echo "        <label for='inputTwitter'>Twitter</label>";
echo "        <input type='text' class='form-control' value='$s_m_twitter'>";
echo "    </div>";
echo "</div>";

// 按鈕列
echo "    <input type='button' value='更新' class='upt-btn btn btn-primary' id='$s_m_id'>";
echo "    <input type='button' value='刪除' class='del-btn btn btn-primary'>";

// 收尾標籤
echo "</div>";
echo "</div>";
}
?>
