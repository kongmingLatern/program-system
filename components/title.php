<div class="container mx-auto px-4 py-5">
  <!-- 内容 -->
  <div class='flex justify-center'>
    <img src='<?php echo $cover; ?>' alt='cover' class='max-w-[600px] max-h-[450px] object-contain' />
  </div>

  <p id="markdown-content" class="bg-white p-4"></p>

  <div class="bg-white rounded-lg shadow-lg p-5">
    <div class="mt-5">
      <span class="text-gray-500">作者：</span>
      <span class="text-gray-800">
        <?php echo $nickname; ?>
      </span>
    </div>
    <div class="mt-2">
      <span class="text-gray-500">发布时间：</span>
      <span class="text-gray-800">
        <?php
        echo $create_time;
        ?>
      </span>
    </div>
  </div>
</div>