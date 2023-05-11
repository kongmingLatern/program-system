<?php

include_once '../config.php';

header('Content-Type: text/html; charset=utf-8');

$username = $_POST["username"];
$nickname = $_POST["nickname"];
$password = $_POST["password"];
$confirm_password = $_POST["confirm_password"];
$uid = uniqid();

if ($password != $confirm_password) {
  echo "两次输入的密码不一致";
  header("Location: ../pages/register.php");
  exit();
}

$hashed_password = md5($password);


$sql = "INSERT INTO user (uid, username, nickname, password, isAuth) VALUES (?, ?, ?, ?, 0)";

$stmt = $conn->prepare($sql);
$stmt->bind_param("ssss", $uid, $username, $nickname, $hashed_password);

if ($stmt->execute()) {
  echo "<script>alert('注册成功!')</script>";
  header("Location: ../pages/login.php");
} else {
  // NOTE: 这里应该有更详细的错误提示
  echo "<script>alert('注册失败!')</script>";
}
?>