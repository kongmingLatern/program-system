<main class="w-[720px] mx-auto">
  <!-- NOTE: 卡片 -->
  <?php
  include_once $_COOKIE["root_path"] . '/config.php';
  $article = isset($_GET['article']) ? $_GET['article'] : '';
  $stmt = $conn->prepare("SELECT * FROM article, user WHERE uid = article_releaser_uid AND article_name LIKE ?");
  $searchTitle = "%" . $article . "%";
  $stmt->bind_param("s", $searchTitle);
  $stmt->execute();
  $cards = $stmt->get_result();

  if ($cards->num_rows > 0) {
    foreach ($cards as $card) {
      $title = $card['article_name'];
      $nickname = $card['nickname'];
      $create_time = $card['create_time'];
      $category_name = $card['article_category'];
      $content = $card['article_desc'];
      $cover = $card['article_cover'];
      $id = $card['article_id'];
      include $_COOKIE["root_path"] . '/components/card.php';
    }
  }
  ?>
</main>