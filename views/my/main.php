<main class="w-[1000px] mx-auto">
  <?php
  session_start();
  require_once '../config.php';
  header('Content-Type: text/html; charset=utf-8');
  $sql = "SELECT * FROM user WHERE username = '{$_SESSION['username']}'";
  $result = $conn->query($sql);
  $user = $result->fetch_assoc();
  $uid = $user['uid'];
  $nickname = $user['nickname'];
  $avatar = $user['avatar'];
  $desc = $user['desc'];
  $job = $user['job'];
  ?>
  <!-- NOTE: 卡片 -->
  <div class="flex">
    <!-- 个人信息卡片 -->
    <div class="w-1/4 p-4">
      <div class="bg-white rounded-md shadow-sm p-4 text-center">
        <img class="h-24 w-24 rounded-full mx-auto" src="<?php echo $avatar; ?>" alt="User avatar">
        <h2 class="mt-2 text-center text-2xl font-bold">
          <?php echo $nickname; ?>
        </h2>
        <p class="mt-1 text-center text-gray-500 text-sm">
          <?php
          echo $job;
          ?>
        </p>
        <button class="btn btn-outline btn-info mt-2"
          onclick="window.location.href='/pages/modify_userinfo.php'">编辑个人信息</button>
      </div>
    </div>
    <!-- 个人中心主体部分 -->
    <div class="w-3/4 p-4">
      <!-- 个人简介 -->
      <div class="bg-white rounded-md shadow-sm p-4 mb-4">
        <h2 class="text-xl font-bold">个人简介</h2>
        <p class="mt-2 text-gray-700">
          <?php
          echo $desc;
          ?>
        </p>
      </div>
      <!-- 内容选项卡 -->
      <div class="bg-white rounded-md shadow-sm">
        <div class="border-b border-gray-200">
          <nav class="-mb-px flex space-x-8" aria-label="Tabs">
            <a href="#"
              class="border-indigo-500 text-indigo-600 hover:text-indigo-700 hover:border-indigo-300 w-1/4 py-4 px-1 text-center border-b-2 font-medium text-sm"
              aria-current="page">
              文章
            </a>
            <a href="#"
              class="border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 w-1/4 py-4 px-1 text-center border-b-2 font-medium text-sm">
              评论
            </a>
            <a href="#"
              class="border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 w-1/4 py-4 px-1 text-center border-b-2 font-medium text-sm">
              点赞
            </a>
            <a href="#"
              class="border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 w-1/4 py-4 px-1 text-center border-b-2 font-medium text-sm">
              收藏
            </a>
          </nav>
        </div>
        <!-- 选项卡内容 -->
        <div class="p-4">
          <!-- 在这里添加选项卡的内容，例如用户的文章、评论等 -->
          <?php
          $sql = "SELECT * FROM article WHERE article_releaser_uid = '{$uid}'";
          $cards = $conn->query($sql);
          if ($cards->num_rows > 0) {
            foreach ($cards as $card) {
              $title = $card['article_name'];
              $desc = $card['article_desc'];
              $cover = $card['article_cover'];
              include '../components/article_card.php';
            }
          }
          ?>
        </div>
      </div>
    </div>
  </div>

</main>