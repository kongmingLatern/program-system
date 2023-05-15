<div class="p-4">
  <!-- 文章卡片 -->
  <div
    class="card card-side flex space-x-4 rounded-none bg-base-100 h-[140px] border-b-[1px] hover:bg-[#fafafa] hover:ease-in  cursor-pointer text-ellipsis overflow-hidden"
    onclick="redirectToDetailsPage('<?php echo $id; ?>')">
    <!-- 文章缩略图 -->
    <img class="h-30 w-32 object-cover rounded" src="<?php echo $cover; ?>" alt="Article image">
    <!-- 文章内容 -->
    <div class="flex-1 flex flex-col justify-between">
      <!-- 文章标题 -->
      <h2 class="text-xl font-bold">
        <?php echo $title; ?>
      </h2>
      <!-- 文章简介 -->
      <p class="mt-2 text-gray-700 line-clamp-3">
        <?php echo $desc ?>
      </p>
      <!-- 文章信息 -->
      <div class="mt-2 flex items-center space-x-4">
        <div class="flex items-center space-x-1 text-sm text-gray-500">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-4 w-4">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8">
            </path>
          </svg>
          <span>10分钟前</span>
        </div>
        <div class="flex items-center space-x-1 text-sm text-gray-500">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-4 w-4">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 8l6 4-6 4"></path>
          </svg>
          <span>100阅读</span>
        </div>
        <div class="flex items-center space-x-1 text-sm text-gray-500">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-4 w-4">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M7 20l4-16m2 16l4-16M6 9h14M4 15h14"></path>
          </svg>
          <span>50赞</span>
        </div>
      </div>
    </div>
  </div>
</div>