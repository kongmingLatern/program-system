<!-- 需要传递
  $id       -- 文章编号
  $title    -- 文章标题
  $content  -- 文章内容
  $cover    -- 文章封面
 -->
<div class="card card-side bg-base-100 shadow-xl mb-2">
  <div class="card-body w-[900px]">
    <h2 class="card-title">
      <?php echo $title; ?>
    </h2>
    <p>
      <?php echo $content; ?>
    </p>
    <div class="card-actions justify-end">
      <button class="btn btn-primary" onclick="redirectToDetailsPage('<?php echo $id; ?>')">Watch</button>
    </div>
  </div>
  <figure>
    <img src=<?php echo $cover; ?> class="w-[300px] h-[250px] object-contain p-4" alt="Movie" />
  </figure>
</div>
<div class="divider"></div>