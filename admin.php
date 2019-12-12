<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>後台管理</title>
    <link rel="stylesheet" href="./css/bootstrap.css">
    <script type="text/javascript" src="./js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="./js/popper.min.js"></script>
    <script type="text/javascript" src="./js/bootstrap.min.js"></script>
<!--  設定未登入或未註冊時的訊息  -->
<?php
session_start();
if(!isset($_SESSION['login']) || $_SESSION['login']==0){
?>
<style>
body {
    text-align: center;
    padding-top: 10%;
}
</style>
<?php
    echo "未登入成功或未註冊。<br>";
    echo "請回<a href='./index.html'>首頁</a>重新登入，或到<a href='./reg.html'>註冊頁面</a>註冊。";
    exit();
}elseif($_SESSION['login']==2){
    ?>
<style>
    body {
        text-align: center;
        padding-top: 10%;
    }
</style>
    <?php
        echo "未註冊成功。<br>";
        echo "請回<a href='./reg.html'>註冊頁面</a>重新註冊。";
        exit();
    }
    ?>
<!-- 設定一般樣式 -->
<style>
    .admin {
      width: 100vw;
      height: 100vh;
    }
    .content {
      width: 100%;
      height: 90%;
      box-sizing: border-box;

      float:left;
    }
</style>
</head>
<body>
  <!-- 導覽列 -->
<div class="admin bg-light">
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="./admin.php">CandyResume</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
      aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">管理資料和履歷</a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="#" onclick="loadpage('data.html')">個人資料</a>
            <a class="dropdown-item" href="#" onclick="loadpage('social_m.html')">社群資料</a>
            <a class="dropdown-item" href="#" onclick="loadpage('edu.html')">學歷資料</a>
            <a class="dropdown-item" href="#" onclick="loadpage('s_intro.html')">自我介紹</a>
            <a class="dropdown-item" href="#" onclick="loadpage('skill.html')">工作技能</a>
            <a class="dropdown-item" href="#" onclick="loadpage('exp.html')">工作經歷</a>
            <a class="dropdown-item" href="#" onclick="loadpage('img.html')">頭像圖片</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#" onclick="loadpage('reqs.html')">設定求職條件</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./resume.php" target="_blank">預覽履歷</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./api/logout.php">登出</a>
        </li>
      </ul>
    </div>
  </nav>

  <div class="content bg-light text-dark overflow-auto">

<?php
if($_SESSION['login']==1){
  echo "<div class='jumbotron bg-light jumbotron-fluid'>";
  echo "<div class='container'>";
  echo "    <h1 class='display-4'>歡迎登入！</h1>";
  echo "    <p class='lead'>請從上方選單選擇要執行的操作。</p>";
  echo "</div>";
  echo "</div>";
}
?>
    </div>
  </div>

<script>
$(function(){
    // 點選載入頁面
    loadpage=(page)=>{
    $('.content').load('./admin/'+page)
    }

// 返回後回到原頁面
<?php
if(!empty($_GET['p'])){
  switch($_GET['p']){
    case "sm":
?>loadpage('social_m.html')<?php
    break;
    case "ed":
?>loadpage('edu.html')<?php
    break;
    case "si":
?>loadpage('s_intro.html')<?php
    break;
    case "sk":
?>loadpage('skill.html')<?php
    break;
    case "ex":
?>loadpage('exp.html')<?php
    break;
    case "re":
?>loadpage('reqs.html')<?php
    break;
    case "im":
?>loadpage('img.html')<?php
    break;

    default:
    break;
  }
}
?>

})
</script>
</body>
</html>