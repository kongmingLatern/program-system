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