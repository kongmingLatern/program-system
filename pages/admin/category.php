<div class="p-4">
  <h1 class="text-2xl font-bold mb-4">分类管理</h1>
  <p class="text-gray-700">Welcome to the category!</p>
</div>
<?php
include_once '../../config.php';

$perPage = 10; // 每页显示10条记录
$currentPage = isset($_GET['pages']) ? (int) $_GET['pages'] : 1; // 获取当前页码
$offset = ($currentPage - 1) * $perPage; // 计算偏移量

// 查询总记录数并计算总页数
$totalRecordsRes = $conn->query("SELECT COUNT(*) AS total 
                                 FROM category 
                                 ");
$totalRecords = $totalRecordsRes->fetch_assoc()['total'];
$totalPages = ceil($totalRecords / $perPage);

$sql = "SELECT * 
        FROM category 
        LIMIT $perPage OFFSET $offset
        ";

$result = $conn->query($sql);

$table = [
  "head" => [
    "编号",
    "分类",
    "操作"
  ],
  "content" => [],
  "table" => "category",
];

while ($user = $result->fetch_assoc()) {
  $info = [];
  $info["category_id"] = $user["category_id"];
  $info["category_name"] = $user["category_name"];

  $table["content"][] = $info;
}
include_once '../../components/table.php'
  ?>