<div class="overflow-x-auto">
  <table class="table table-zebra w-full">
    <!-- head -->
    <thead>
      <tr>
        <?php
        foreach ($table['head'] as $head) {
          echo "<th>$head</th>";
        }
        ?>
      </tr>
    </thead>
    <tbody>
      <?php
      foreach ($table["content"] as $content) {
        echo "<tr>";
        foreach ($content as $key => $value) {
          if (strpos($key, "avatar") !== false || strpos($key, "cover") !== false) {
            echo "<td><img src='$value' alt='avatar' class='w-32 h-32'></td>";
            continue;
          } else if (strpos($key, "content") !== false || strpos($key, "desc") !== false) {
            echo "<td>
                <p class='max-w-[500px] overflow-hidden text-ellipsis'>
                    {$value}
                </p>
              </td>";
            continue;
          }
          echo "<td>$value</td>";
        }
        echo "<td>";
        echo "<button class='btn btn-error'>删除</button>";
        echo "</td>";
        echo "</tr>";
      }
      ?>

    </tbody>

    <tfoot>
      <tr class="text-center">
        <th colspan="<?php echo count($table["head"]); ?>">
          <?php
          include_once '../../components/pagination.php'
            ?>
        </th>
      </tr>
    </tfoot>
  </table>


</div>