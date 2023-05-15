<div class="container mx-auto px-4">
  <!-- 内容 -->
  <h1>
    <?php
    echo $article_name;
    ?>
  </h1>

  <div class="card w-[100%] bg-white">
    <div class="card-body py-2 px-0">
      <div class="card-title">
        <img src='<?php echo $article_avatar; ?>' class="w-12 h-12 object-contain" />
        <div>
          <div class="font-normal text-lg">
            <?php
            echo $nickname;
            ?>
          </div>
          <div class="font-thin text-sm text-[#888]">
            发布时间：
            <?php
            echo $create_time;
            ?>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div class='flex justify-center'>
    <img src='<?php echo $cover; ?>' alt='cover' class='max-w-[600px] max-h-[450px] object-contain' />
  </div>

  <div id="markdown-content" style='display:none;'>
    <?php echo $content; ?>
  </div>

  <p id='markdown-display' class="bg-white p-4"></p>

</div>