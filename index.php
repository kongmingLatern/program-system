<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>新闻发布系统</title>
  <link rel="stylesheet" href="styles.css">
  <link href="./css/daisy.css" rel="stylesheet" type="text/css" />
  <script src="./js/tailwind.js"></script>
  <script src="./js/vue.js"></script>
  <script src='./js/vue-router.js'></script>
</head>

<body>
  <div id="app">

    <!-- 头部 -->
    <?php
    include_once './views/header.php'
      ?>
    <div class="divider"></div>

    <!-- 导航栏 -->
    <?php
    include_once './views/navbar.php'
      ?>
    <div class="divider"></div>

    <!-- 内容 -->
    <?php
    include_once './views/main.php'
      ?>

    <div class="divider"></div>
    <!-- 底部 -->
    <?php
    include_once './views/footer.php'
      ?>

  </div>

  <script>
    const { createApp } = Vue
    function redirectToDetailsPage(card) {
      window.location.href = "/pages/detail.php?card=" + card
    }
    createApp({
      data() {
        return {
          title: "header1"
        }
      }
    }).mount('#app')
  </script>
</body>

</html>