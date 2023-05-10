<div class="overflow-x-auto">
  <table class="table table-zebra w-full">
    <!-- head -->
    <thead>
      <tr>
        <th>No</th>
        <th>Name</th>
        <th>Job</th>
        <th>Favorite Color</th>
        <th>Operation</th>
      </tr>
    </thead>
    <tbody>
      <!-- row 1 -->
      <tr>
        <th>1</th>
        <td>Cy Ganderton</td>
        <td>Quality Control Specialist</td>
        <td>Blue</td>
        <td>
          <button class='btn btn-error'>删除</button>
        </td>
      </tr>
      <!-- row 2 -->
      <tr>
        <th>2</th>
        <td>Hart Hagerty</td>
        <td>Desktop Support Technician</td>
        <td>Purple</td>
        <td>
          <button class='btn btn-error'>删除</button>
        </td>
      </tr>
      <!-- row 3 -->
      <tr>
        <th>3</th>
        <td>Brice Swyre</td>
        <td>Tax Accountant</td>
        <td>Red</td>
        <td>
          <button class='btn btn-error'>删除</button>
        </td>
      </tr>
    </tbody>

    <tfoot>
      <tr class="text-center">
        <th colspan="4">
          <?php
          include_once '../../components/pagination.php'
            ?>
        </th>
      </tr>
    </tfoot>
  </table>


</div>