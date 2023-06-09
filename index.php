<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>新闻发布系统</title>
  <link href="./css/daisy.css" rel="stylesheet" type="text/css" />
  <script src="./js/tailwind.js"></script>
  <script src="./js/vue.js"></script>
  <?php
  define('ROOT_PATH', realpath(dirname(__FILE__)));
  // 将路径保存在缓存中
  setcookie('root_path', ROOT_PATH, time() + 3600 * 24 * 7, "/");
  ?>
</head>

<body class='bg-[#F2F3F5]'>


  <!-- 头部 -->
  <?php
  include_once './views/index/header.php'
    ?>

  <!-- 轮播图 -->

  <?php
  include_once './components/carousel.php';
  ?>


  <!-- 导航栏 -->
  <?php
  include_once './views/index/navbar.php';
  ?>


  <!-- 内容 -->
  <?php
  include_once './views/index/main.php';
  ?>

  <div class="divider"></div>


  <!-- 底部 -->
  <?php
  include_once './views/index/footer.php';
  ?>

  <?php
  $conn->close();
  ?>


  <script>
    function redirectToDetailsPage(card) {
      <?php
      if ($_COOKIE["uid"]) {
        echo "window.location.href = \"/pages/detail.php?card=\" + card";
      } else {
        echo "window.location.href = \"/pages/login.php\"";
      }
      ?>
    }
    function redirectToPersonal() {
      <?php
      if ($_COOKIE["uid"]) {
        echo "window.location.href = \"/pages/my.php\"";
      } else {
        echo "window.location.href = \"/pages/login.php\"";
      }
      ?>
    }
  </script>

</body>

</html>