<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>我的</title>
  <link href="../css/daisy.css" rel="stylesheet" type="text/css" />
  <script src="../js/tailwind.js"></script>
</head>

<body class='bg-[#F2F3F5]'>
  <?php
  ?>
  <!-- 头部 -->
  <?php
  include_once '../views/index/header.php';
  ?>
  <div class="divider"></div>

  <!-- 内容 -->
  <?php
  include_once '../views/my/main.php';
  ?>

  <div class="divider"></div>
  <!-- 底部 -->
  <?php
  include_once '../views/index/footer.php';
  ?>
  <script>
    function redirectToDetailsPage(card) {
      window.location.href = "/pages/detail.php?card=" + card
    }
  </script>
</body>


</html>