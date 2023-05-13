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
      $t = $table["table"];
      foreach ($table["content"] as $content) {
        echo "<tr>";
        echo "<form action='/service/delete.php' method='post'>";
        foreach ($content as $key => $value) {
          $id = reset($content);
          $k = key($content);
          if (strpos($key, "avatar") !== false || strpos($key, "cover") !== false) {
            echo "<td><img src='$value' alt='avatar' class='w-32 min-w-[150px] min-h-[100px] object-contain  h-32'></td>";
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
        echo "<input type='hidden' name='id' value='$id' />";
        echo "<input type='hidden' name='key' value='$k' />";
        echo "<input type='hidden' name='table' value='$t' />";
        echo "<button type='submit' class='btn btn-error'>删除</button>";
        echo "</td>";
        echo "</form>";
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