<main class="w-[1000px] mx-auto">
  <!-- NOTE: 卡片 -->
  <?php

  $cards = [
    [
      'id' => 1,
      'title' => 'Card 1',
      'content' => 'Content 1',
      'cover' => '/assets/anime.JPG'
    ],
    ['id' => 2, 'title' => 'Card 2', 'content' => 'Content 2', 'cover' => '/assets/anime.JPG'],
    ['id' => 3, 'title' => 'Card 3', 'content' => 'Content 3', 'cover' => '/assets/anime.JPG'],
    ['id' => 4, 'title' => 'Card 4', 'content' => 'Content 4', 'cover' => '/assets/anime.JPG'],
    ['id' => 5, 'title' => 'Card 5', 'content' => 'Content 5', 'cover' => '/assets/anime.JPG'],
  ];

  foreach ($cards as $card) {
    $title = $card['title'];
    $content = $card['content'];
    $cover = $card['cover'];
    $id = $card['id'];
    include './components/card.php';
  }
  ?>
</main>