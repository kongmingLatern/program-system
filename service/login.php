<?php
include_once '../config.php';
// 开启session
session_start();

header('Content-Type: text/html; charset=utf-8');

$username = $_POST['username'];
$password = md5($_POST['password']);

$sql = "SELECT * FROM user WHERE username = '{$username}' AND password = '{$password}'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
  $user = $result->fetch_assoc();
  $_SESSION['username'] = $username;
  setcookie('uid', $user["uid"], time() + 3600 * 24 * 7, "/");
  header('Location: ../index.php'); // 修改为登录成功后的页面
} else {
  // NOTE: 这里应该有更详细的错误提示
  echo "用户名或密码错误";
}
?>