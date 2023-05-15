<main class="w-[1000px] mx-auto">
  <!-- NOTE: 卡片 -->
  <?php
  include_once $_COOKIE["root_path"] . '/config.php';
  header('Content-Type: text/html; charset=utf-8');
  $category = isset($_GET['category']) ? $_GET['category'] : '';
  $stmt = $conn->prepare("SELECT * FROM article WHERE article_category = ?");
  $stmt->bind_param("s", $category);
  $stmt->execute();
  $cards = $stmt->get_result();

  if ($cards->num_rows > 0) {
    foreach ($cards as $card) {
      $title = $card['article_name'];
      $content = $card['article_desc'];
      $cover = $card['article_cover'];
      $id = $card['article_id'];
      include $_COOKIE["root_path"] . '/components/card.php';
    }
  }
  ?>
</main>