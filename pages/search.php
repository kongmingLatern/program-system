<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>查询</title>
  <link href="../css/daisy.css" rel="stylesheet" type="text/css" />
  <script src="../js/tailwind.js"></script>
  <script src="../js/vue.js"></script>
</head>

<body class='bg-[#F2F3F5]'>

  <!-- 头部 -->
  <?php
  include_once '../views/index/header.php'
    ?>

  <!-- 内容 -->
  <?php
  include_once '../views/index/main.php';
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
    function redirectToPersonal() {
      window.location.href = "/pages/my.php"
    }
  </script>

</body>

</html>