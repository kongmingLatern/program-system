<nav class="w-[1000px] mx-auto border-b-[2px]">
  <ul class="menu menu-horizontal w-[100%] bg-base-100">

    <?php
    $sql = "SELECT * FROM category";
    $result = $conn->query($sql);

    while ($category = $result->fetch_assoc()) {
      if ($category['category_name'] != '首页') {
        echo "<li class='ml-2'><a href='/pages/category.php?category={$category['category_name']}'>{$category['category_name']}</a></li>";
      } else {
        echo "<li class='ml-2'><a href='/index.php'>{$category['category_name']}</a></li>";
      }
    }
    ?>
  </ul>
</nav>