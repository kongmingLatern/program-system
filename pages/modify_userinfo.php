<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>编辑个人信息</title>
  <link rel="stylesheet" href="../../css/daisy.css">
  <script src='../../js/tailwind.js'></script>
</head>

<body>

  <!-- 头部 -->
  <?php
  include_once '../views/index/header.php';
  ?>
  <div class="divider"></div>

  <!-- 内容 -->
  <?php
  include_once '../views/modify/main.php';
  ?>

  <div class="divider"></div>
  <!-- 底部 -->
  <?php
  include_once '../views/index/footer.php';
  ?>
</body>

<script>
  var loadFile = function (event) {
    var output = document.getElementById('output');
    output.src = URL.createObjectURL(event.target.files[0]);
    output.onload = function () {
      URL.revokeObjectURL(output.src)
    }
  };
</script>

</html>