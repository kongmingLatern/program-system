<?php
include_once '../config.php';
// 获取用户提交的评论内容
$id = $_POST["id"];
$sql = "UPDATE comment 
        SET isAllow = 1
        WHERE comment_id = '{$id}'
        ";

$result = $conn->query($sql);
if ($result) {
  // 刷新页面
  header("Location: ../pages/admin/index.php");
} else {
  echo json_encode([
    "code" => 500,
    "message" => "评论失败"
  ]);
}
?>