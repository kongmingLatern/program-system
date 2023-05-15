<main class="flex justify-around min-w-[1000px] max-w-[1200px] mx-auto ">

  <aside class='w-2/3 bg-white mr-5'>
    <?php
    include_once '../components/title.php';
    ?>
    <?php
    include_once '../components/comment_textarea.php';
    ?>
    <?php
    $sql = "SELECT * FROM comment, user 
            WHERE comment_article_id = '{$_GET['card']}' AND comment_uid = uid
            ORDER BY create_time DESC";

    $comments = $conn->query($sql);

    // 遍历查询结果
    if ($comments->num_rows > 0) {
      foreach ($comments as $comment) {
        $comment_nickname = $comment['nickname'];
        $comment_content = $comment['comment_content'];
        $comment_avatar = $comment['avatar'];
        $comment_create_time = $comment['create_time'];
        include '../components/comment.php';
      }
    }
    ?>
  </aside>

  <aside class='flex flex-col w-1/3'>
    <div class="top">
      <?php
      include_once '../components/user_card.php';
      ?>
    </div>
  </aside>


</main>