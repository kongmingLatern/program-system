<?php
$cardList = array(1, 2, 3, 4, 5);
foreach ($cardList as $card) {
  $list = <<<'EOT'
<div class="card card-side bg-base-100 shadow-xl mb-2">
  <div class="card-body">
    <h2 class="card-title">降本提效，学低代码开发就对啦</h2>
    <p>
      可视化搭建+开发+部署+监控等模块，深入低代码开发底层细节，构建产品全链路体系，解决前端工程化瓶颈！6折特惠，立即试读👉🏻👉🏻👉🏻
    </p>
    <div class="card-actions justify-end">
      <button class="btn btn-primary" onclick="redirectToDetailsPage
EOT;
  $list .= "({$card})";
  $list .= <<<'EOT'
      ">Watch</button>
    </div>
  </div>
  <figure><img src="../assets/anime.JPG" class="w-[300px] h-[250px] object-contain p-4" alt="Movie" /></figure>
</div>
<div class="divider"></div>

EOT;
  echo $list;
}
?>