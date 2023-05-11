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

  <!-- <script src="../js/vue.js"></script> -->
  <script>
    tailwind.config = {
      corePlugins: {
        preflight: false,
      }
    }
  </script>
  <?php require_once('../middleware/markdown.php'); ?>
</head>

<body>
  <!-- <div id="app"> -->
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

  <!-- </div> -->

  <script>
    document.addEventListener('DOMContentLoaded', function () {
      const converter = new showdown.Converter();
      converter.setOption('tasklists', true);
      converter.setOption('disableForced4SpacesIndentedSublists', true);
      converter.setFlavor('github');
      const html = converter.makeHtml(`<?php echo get_markdown_content(); ?>`);
      document.getElementById('markdown-content').innerHTML = html;
    });   
  </script>
</body>

</html>