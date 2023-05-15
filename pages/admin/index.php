<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>后台管理页面</title>
  <link rel="stylesheet" href="../../css/daisy.css">
  <script src='../../js/tailwind.js'></script>
</head>

<body>
  <?php
  error_reporting(E_ALL & ~E_NOTICE); // 设置错误报告级别，排除Notice级别的错误
  include_once '../../views/index/header.php';
  ?>
  <div class="flex">
    <div class="menu w-1/5 bg-gray-100">
      <ul class="p-4">
        <li class="mb-4 h-[50px] leading-[50px] text-lg">
          <a href="index.php?page=user" class="hover:text-gray-900 ">用户管理</a>
        </li>
        <li class="mb-4 h-[50px] leading-[50px] text-lg">
          <a href="index.php?page=article" class="hover:text-gray-900">文章管理</a>
        </li>
        <li class="mb-4 h-[50px] leading-[50px] text-lg">
          <a href="index.php?page=category" class="hover:text-gray-900">分类管理</a>
        </li>
        <li class="mb-4 h-[50px] leading-[50px] text-lg">
          <a href="index.php?page=comment" class="hover:text-gray-900">评论管理</a>
        </li>
      </ul>
    </div>
    <div class="w-4/5 bg-gray-200">
      <div class='p-4'>
        <?php
        $page = $_GET['page'];
        if (!$page) {
          $page = 'user';
        }
        switch ($page) {
          case 'user':
            include_once './user.php';
            break;
          case 'article':
            include_once './article.php';
            break;
          case 'category':
            include_once './category.php';
            break;
          case 'comment':
            include_once './comment.php';
            break;
          default:
            include_once '../../index.php';
        }
        ?>
      </div>
    </div>
  </div>

  <?php
  include_once '../../views/index/footer.php';
  ?>
</body>

<script>
  const goTo = (currentPage, totalPages, sign = 'plus') => {
    if (sign === 'plus') {
      if (currentPage === totalPages) {
        return
      } else {
        // 路由跳转
        currentPage += 1
      }
    } else {
      if (currentPage === 1) {
        return
      } else {
        // 路由跳转
        currentPage--
      }
    }

    const urlParams = new URLSearchParams(window.location.search);
    urlParams.set("pages", currentPage);

    const newUrl = `${window.location.pathname}?${urlParams.toString()}`;
    window.location.href = newUrl;
  }
</script>


</html>