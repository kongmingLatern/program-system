<main class="w-[1000px] mx-auto">
  <!-- NOTE: 卡片 -->
  <?php
  require_once 'config.php';
  // header('Content-Type: text/html; charset=utf-8');
  $sql = "SELECT * FROM article";

  $cards = $conn->query($sql);

  if ($cards->num_rows > 0) {
    foreach ($cards as $card) {
      $title = $card['article_name'];
      $content = $card['article_desc'];
      $cover = $card['article_cover'];
      $id = $card['article_id'];
      include 'components/card.php';
    }
  }

  // $cards = [
  //   [
  //     'id' => 1,
  //     'title' => 'Kylin-UI Component',
  //     'content' => '# title 123123',
  //     'cover' => '/assets/anime.JPG'
  //   ],
  //   ['id' => 2, 'title' => 'Card 2', 'content' => 'Content 2', 'cover' => '/assets/anime.JPG'],
  //   ['id' => 3, 'title' => 'Card 3', 'content' => 'Content 3', 'cover' => '/assets/anime.JPG'],
  //   ['id' => 4, 'title' => 'Card 4', 'content' => 'Content 4', 'cover' => '/assets/anime.JPG'],
  //   ['id' => 5, 'title' => 'Card 5', 'content' => 'Content 5', 'cover' => '/assets/anime.JPG'],
  // ];
  
  ?>
</main>