<div class="p-4">
  <h1 class="text-2xl font-bold mb-4">分类管理</h1>
  <p class="text-gray-700">Welcome to the category!</p>
</div>
<?php
include_once '../../config.php';
$sql = "SELECT * FROM category";
$result = $conn->query($sql);

$table = [
  "head" => [
    "编号",
    "分类",
    "操作"
  ],
  "content" => []
];

while ($user = $result->fetch_assoc()) {
  $info = [];
  $info["category_id"] = $user["category_id"];
  $info["category_name"] = $user["category_name"];

  $table["content"][] = $info;
}
include_once '../../components/table.php'
  ?>