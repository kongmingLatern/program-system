<main class="w-[1000px] mx-auto">
  <!-- NOTE: 卡片 -->
  <?php
  include_once $_COOKIE["root_path"] . '/config.php';
  header('Content-Type: text/html; charset=utf-8');
  $article = isset($_GET['article']) ? $_GET['article'] : '';
  $stmt = $conn->prepare("SELECT * FROM article WHERE article_name LIKE ?");
  $searchTitle = "%" . $article . "%";
  $stmt->bind_param("s", $searchTitle);
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