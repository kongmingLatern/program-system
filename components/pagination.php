<div class="btn-group">
  <button class="btn" onclick="goTo(<?php echo $currentPage; ?>, <?php echo $totalPages; ?>, 'min')">«</button>
  <button class="btn">Page
    <?php
    echo $currentPage;
    ?>
  </button>
  <button class="btn" onclick='goTo(<?php echo $currentPage; ?>, <?php echo $totalPages; ?>)'>»</button>
</div>