<!-- 需要传递
  $id       -- 文章编号
  $title    -- 文章标题
  $content  -- 文章内容
  $cover    -- 文章封面
 -->
<div
  class="card card-side rounded-none bg-base-100 w-[720px] h-[140px] border-b-[1px] hover:bg-[#fafafa] hover:ease-in  cursor-pointer text-ellipsis overflow-hidden"
  onclick="redirectToDetailsPage('<?php echo $id; ?>')">
  <div class="card-body p-0 pt-[12px] px-[20px] w-[80%]">
    <div class='text-sm text-[#515767]'>
      <span class='mr-2'>
        <?php
        echo $nickname;
        ?>
      </span>
      <span class='px-2'>
        |
      </span>
      <span>
        <?php

        $currentTimestamp = time(); // 当前时间戳
        $publishTimestamp = strtotime($create_time); // 将发布时间转换为时间戳
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
        } elseif ($seconds > 0) {
          echo "{$seconds}秒前";
        }

        ?>
      </span>
      <span class='px-2'>
        |
      </span>
      <span class='mr-2'>
        <?php
        echo $category_name;
        ?>
      </span>
    </div>
    <h2 class="card-title truncate">
      <?php echo $title; ?>
    </h2>
    <p class='font-thin text-sm text-[#666]  line-clamp-1'>
      <?php echo $content; ?>
    </p>
  </div>
  <figure class="p-0 pt-[12px] px-[20px]">
    <img src=<?php echo $cover; ?> class="w-[120px] h-[80px] object-cover" alt="封面" />
  </figure>
</div>