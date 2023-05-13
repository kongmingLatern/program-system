<div class="card w-96 bg-base-100 shadow-xl">
  <div class="card-body">
    <div class="card-title">
      <img src='<?php echo $avatar; ?>' class="w-12 h-12 object-contain" />
      <div>
        <div class="font-normal text-lg">
          <?php
          echo $nickname;
          ?>
        </div>
        <div class="font-thin text-sm">
          <?php
          echo $job;
          ?>
        </div>
      </div>
    </div>
    <div class="card-actions justify-around mt-2">
      <button class="btn btn-secondary w-[45%]">关注</button>
      <button class="btn btn-outline w-[45%]">私信</button>
    </div>
  </div>
</div>