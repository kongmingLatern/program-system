<main class="w-[1000px] mx-auto">
  <!-- NOTE: 卡片 -->
  <?php

  $cards = [
    [
      'id' => 1,
      'title' => 'Kylin-UI Component',
      'content' => '# title 123123',
      'cover' => '/assets/anime.JPG'
    ]
  ];

  foreach ($cards as $card) {
    $title = $card['title'];
    $content = $card['content'];
    $cover = $card['cover'];
    $id = $card['id'];
    include '../components/card.php';
  }
  ?>
</main>