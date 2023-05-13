<div class="flex space-x-3 p-4 bg-white rounded-md shadow-sm">
  <img class="h-10 w-10 rounded-full" src="<?php echo $comment_avatar; ?>" alt="User avatar">
  <div class="flex-1">
    <div class="flex items-center justify-between">
      <div class="text-sm font-bold">
        <?php echo $comment_nickname; ?>
      </div>
      <div class="text-xs text-gray-500">
        <?php
        $currentTimestamp = time(); // 当前时间戳
        $publishTimestamp = strtotime($comment_create_time); // 将发布时间转换为时间戳
        $timeDifference = $currentTimestamp - $publishTimestamp; // 计算时间差值（单位：秒）
        
        // 将时间差值格式化为天、小时、分钟和秒
        $days = floor($timeDifference / (60 * 60 * 24));
        $hours = floor(($timeDifference % (60 * 60 * 24)) / (60 * 60));
        $minutes = floor(($timeDifference % (60 * 60)) / 60);
        $seconds = $timeDifference % 60;

        // 输出时间差值
        if ($days > 0) {
          echo "{$days}天前";
        } elseif ($hours > 0) {
          echo "{$hours}小时前";
        } elseif ($minutes > 0) {
          echo "{$minutes}分钟前";
        } else {
          echo "{$seconds}秒前";
        }

        ?>
      </div>
    </div>
    <div class="mt-2 text-sm text-gray-700">
      <?php
      echo $comment_content;
      ?>
    </div>
    <div class="mt-2 flex items-center space-x-2">
      <button class="flex items-center space-x-1 text-gray-500 hover:text-blue-600 transition-colors">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-4 w-4">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M6 19a6 6 0 0 0 6 6v-6m6 0v6a6 6 0 0 0 6-6v-9a6 6 0 0 0-6-6h-6a6 6 0 0 0-6 6v9z"></path>
        </svg>
        <span>回复</span>
      </button>
      <button class="flex items-center space-x-1 text-gray-500 hover:text-red-600 transition-colors">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-4 w-4">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 20l4-16m2 16l4-16M6 9h14M4 15h14">
          </path>
        </svg>
        <span>赞</span>
      </button>
    </div>
  </div>
</div>