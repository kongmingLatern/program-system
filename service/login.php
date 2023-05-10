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
  // 用户名和密码匹配
  $_SESSION['username'] = $username;
  header('Location: ../index.php'); // 修改为登录成功后的页面
} else {
  echo "用户名或密码错误";
}

?>