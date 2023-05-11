<div class="p-4">
  <h1 class="text-2xl font-bold mb-4">用户管理</h1>
  <p class="text-gray-700">Welcome to the User!</p>
</div>

<?php

include_once "../../config.php";


$sql = "SELECT * FROM user";
$result = $conn->query($sql);

$table = [
  "head" => [
    "编号",
    "用户名",
    "昵称",
    "职业",
    "个人简介",
    "头像",
    "权限",
    "操作"
  ],
  "content" => []
];

while ($user = $result->fetch_assoc()) {
  $user_info = [];
  $user_info["uid"] = $user["uid"];
  $user_info["username"] = $user["username"];
  $user_info["nickname"] = $user["nickname"];
  $user_info["job"] = $user["job"];
  $user_info["desc"] = $user["desc"];
  $user_info["avatar"] = $user["avatar"];
  $user_info["permissions"] = $user["isAuth"];

  // Add user info to content
  $table["content"][] = $user_info;
}

include_once '../../components/table.php'
  ?>