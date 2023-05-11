<div class="p-4">
  <h1 class="text-2xl font-bold mb-4">文章管理</h1>
  <p class="text-gray-700">Welcome to the Article!</p>
</div>
<?php

include_once '../../config.php';

$sql = "SELECT * FROM article a, user u WHERE a.article_releaser_uid = u.uid";

$result = $conn->query($sql);

$table = [
  "head" => [
    "文章编号",
    "文章作者",
    "文章分类",
    "文章标题",
    "文章封面",
    "文章内容",
    "创建时间",
    "点赞数",
    "操作"
  ],
  "content" => []
];

while ($user = $result->fetch_assoc()) {
  $info = [];
  $info["article_id"] = $user["article_id"];
  $info["nickname"] = $user["nickname"];
  $info["article_category"] = $user["article_category"];
  $info["article_name"] = $user["article_name"];
  $info["article_cover"] = $user["article_cover"];
  $info["article_content"] = $user["article_content"];
  $info["article_like"] = $user["article_like"];
  $info["create_time"] = $user["create_time"];

  $table["content"][] = $info;
}

include_once '../../components/table.php'
  ?>