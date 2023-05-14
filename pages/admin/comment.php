<div class="p-4">
  <h1 class="text-2xl font-bold mb-4">评论管理</h1>
  <p class="text-gray-700">Welcome to the comment!</p>
</div>
<?php
include_once '../../config.php';

$perPage = 10; // 每页显示10条记录
$currentPage = isset($_GET['pages']) ? (int) $_GET['pages'] : 1; // 获取当前页码
$offset = ($currentPage - 1) * $perPage; // 计算偏移量

// 查询总记录数并计算总页数
$totalRecordsRes = $conn->query("SELECT COUNT(*) AS total 
                                 FROM comment c, user u, article a 
                                 WHERE c.comment_uid = u.uid AND c.comment_article_id = a.article_id
                                 ");
$totalRecords = $totalRecordsRes->fetch_assoc()['total'];
$totalPages = ceil($totalRecords / $perPage);

$sql = "SELECT comment_id, u.uid, nickname, comment_content, article_id, article_name, c.create_time 
        FROM comment c, user u, article a 
        WHERE c.comment_uid = u.uid AND c.comment_article_id = a.article_id
        LIMIT $perPage OFFSET $offset
        ";

$result = $conn->query($sql);

$table = [
  "head" => [
    "编号",
    "评论uid",
    "昵称",
    "评论信息",
    "评论文章id",
    "评论文章",
    "评论时间",
    "操作"
  ],
  "content" => [],
  "table" => "comment",
];

while ($user = $result->fetch_assoc()) {
  $user_info = [];
  $user_info["comment_id"] = $user["comment_id"];
  $user_info["uid"] = $user["uid"];
  $user_info["nickname"] = $user["nickname"];
  $user_info["comment_content"] = $user["comment_content"];
  $user_info["article_id"] = $user["article_id"];
  $user_info["article_name"] = $user["article_name"];
  $user_info["create_time"] = $user["create_time"];

  // Add user info to content
  $table["content"][] = $user_info;
}
include_once '../../components/table.php'
  ?>