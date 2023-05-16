<?php
include_once '../config.php';
// 获取用户提交的评论内容
$comment_content = $_POST["comment_content"];
$article_id = $_POST["article_id"];
$uid = $_COOKIE["uid"];
$id = uniqid();
$sql = "INSERT INTO comment 
        VALUES ('{$id}', '{$uid}', '{$article_id}','{$comment_content}', now(), 0)";

$result = $conn->query($sql);
if ($result) {
  header("Location: ../pages/detail.php?card={$article_id}");
} else {
  echo json_encode([
    "code" => 500,
    "message" => "评论失败"
  ]);
}
?>