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

  <?php
  $conn->close();
  ?>
  <script>
    (function () {
      // 默认显示第一个
      changeTab(0)
    })()
    function redirectToDetailsPage(card) {
      window.location.href = "/pages/detail.php?card=" + card
    }
    function changeTab(num) {
      // Tab 栏切换
      let tabs = document.getElementsByClassName('nav')
      console.log(tabs);
      for (let i = 0; i < tabs.length; i++) {
        tabs[i].classList.remove('border-indigo-500')
      }
      tabs[num].classList.add('border-indigo-500')
      // 内容切换
      let contents = document.getElementsByClassName('content')
      for (let i = 0; i < contents.length; i++) {
        contents[i].classList.add('hidden')
      }
      contents[num].classList.remove('hidden')
    }

  </script>
</body>


</html>