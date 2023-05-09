<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>我的</title>
  <link rel="stylesheet" href="styles.css">
  <link href="../css/daisy.css" rel="stylesheet" type="text/css" />
  <script src="../js/tailwind.js"></script>
</head>

<body>
  <!-- <div id="app"> -->
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

  <!-- </div> -->

  <!-- <script>
    const { createApp } = Vue
    createApp({
      data() {
        return {
        }
      }
    }).mount('#app')
  </script> -->
</body>

</html>