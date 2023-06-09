<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="../css/daisy.css" rel="stylesheet" type="text/css" />
  <script src="../js/tailwind.js"></script>
  <script src="../js/vue.js"></script>
  <title>分类</title>
</head>

<body class='bg-[#F2F3F5]'>

  <!-- 头部 -->
  <?php
  include_once '../views/index/header.php'
    ?>

  <!-- 内容 -->
  <?php
  include_once '../views/category/main.php';
  ?>

  <div class="divider"></div>


  <!-- 底部 -->
  <?php
  include_once '../views/index/footer.php';
  ?>

  <?php
  $conn->close();
  ?>


  <script>
    function redirectToDetailsPage(card) {
      <?php
      if (include '../service/is_login.php') {
        echo "window.location.href = \"/pages/detail.php?card=\" + card";
      } else {
        echo "window.location.href = \"/pages/login.php\"";
      }
      ?>
    }
    function redirectToPersonal() {
      <?php
      if (include '../service/is_login.php') {
        echo "window.location.href = \"/pages/my.php\"";
      } else {
        echo "window.location.href = \"/pages/login.php\"";
      }
      ?>
    }
  </script>

</body>

</html>