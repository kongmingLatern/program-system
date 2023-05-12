<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>新闻发布系统</title>
  <link href="../css/daisy.css" rel="stylesheet" type="text/css" />
  <link href='../css/markdown.css' rel="stylesheet" type="text/css" />
  <script src="../js/tailwind.js"></script>
  <script src='../js/showdown.js'></script>
  <script>
    tailwind.config = {
      corePlugins: {
        preflight: false,
      }
    }
  </script>
</head>

<body>
  <?php
  include_once "../config.php";
  // 根据 article_id 查询文章内容
  $article_id = $_GET["card"];
  $sql = "SELECT * FROM article WHERE article_id = '{$article_id}'";
  $result = $conn->query($sql);
  $article = $result->fetch_assoc();
  $content = $article["article_content"];
  $cover = $article["article_cover"];
  ?>
  <!-- 头部 -->
  <?php
  include_once '../views/index/header.php';
  ?>

  <!-- 内容 -->
  <?php
  include_once '../views/detail/main.php';
  ?>

  <div class="divider"></div>
  <!-- 底部 -->
  <?php
  include_once '../views/index/footer.php';
  ?>


  <script>
    document.addEventListener('DOMContentLoaded', function () {
      const converter = new showdown.Converter();
      converter.setOption('tasklists', true);
      converter.setOption('disableForced4SpacesIndentedSublists', true);
      converter.setFlavor('github');

      const html = converter.makeHtml(`<?php echo $content; ?>`);
      document.getElementById('markdown-content').innerHTML = html;
    });   
  </script>
</body>

</html>