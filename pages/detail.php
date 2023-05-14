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
  $create_time = $article["create_time"];
  ?>
  <!-- 头部 -->
  <?php
  include_once '../views/index/header.php';
  ?>

  <!-- 内容 -->
  <?php
  // 根据 uid 查询用户信息
  $uid = $_COOKIE["uid"];
  $sql = "SELECT * FROM user, article WHERE uid = article_releaser_uid AND article_id = '{$article_id}'";
  $result = $conn->query($sql);
  $user = $result->fetch_assoc();
  $article_avatar = $user["avatar"];
  $nickname = $user["nickname"];
  $job = $user["job"];
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
      converter.setOption('tables', true);
      converter.setOption('disableForced4SpacesIndentedSublists', true);
      converter.setOption('smartIndentationFix', true);
      converter.setOption('openLinksInNewWindow', true);
      converter.setOption('ghMentions', true);
      converter.setOption('startNumber', 1);
      converter.setFlavor('github');
      const div = document.getElementById('markdown-content');
      const markdown = div.textContent;
      const html = converter.makeHtml(markdown.trim());
      document.getElementById('markdown-display').innerHTML = html;
    });   
  </script>
</body>

</html>