<?php
include_once '../config.php';
header("Content-type: text/html; charset=utf-8");
$target_dir = $_COOKIE["root_path"] . "/upload/" . date('Y-m-d') . "/";
$dir = "/upload/" . date('Y-m-d') . "/";
$fileId = 'avatar';

if (!file_exists($target_dir)) {
  mkdir($target_dir, 0777, true);
}

// $target_file = $target_dir . basename($_FILES[$fileId]["name"]);
$imageFileType = pathinfo($_FILES[$fileId]["name"], PATHINFO_EXTENSION);
$suffix = time() . '.' . $imageFileType;
$target_file = $target_dir . $suffix;
$uploadOk = 1;

$avatar = $dir . $suffix;

// 检查是否有文件被上传
if (isset($_POST["submit"])) {
  $check = filesize($_FILES[$fileId]["tmp_name"]);
  if ($check !== false) {
    $uploadOk = 1;
  } else {
    $uploadOk = 0;
  }
}

// 检查文件是否已经存在
if (file_exists($target_file)) {
  echo "对不起，该文件已存在";
  $uploadOk = 0;
}

// 允许特定文件格式
if (
  $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
  && $imageFileType != "gif"
) {
  $uploadOk = 0;
}

// 检查是否有错误发生
if ($uploadOk == 0) {
  // 更新除了头像之外的信息
  $nickname = $_POST["nickname"];
  $desc = $_POST["desc"];
  $job = $_POST["job"];
  $sql = "UPDATE user 
          SET nickname = '{$nickname}', introduction = '{$desc}', job = '{$job}'
          WHERE uid = '{$_COOKIE['uid']}'
            ";

  $result = $conn->query($sql);
  header("Location: ../pages/my.php");
} else {
  $nickname = $_POST["nickname"];
  $desc = $_POST["desc"];
  $job = $_POST["job"];
  $sql = "UPDATE user 
          SET nickname = '{$nickname}', introduction = '{$desc}', avatar = '{$avatar}', job = '{$job}'
          WHERE uid = '{$_COOKIE['uid']}'
            ";
  $result = $conn->query($sql);
  if (move_uploaded_file($_FILES[$fileId]["tmp_name"], $target_file)) {
    if ($result) {
      // 跳转回去
      header("Location: ../pages/my.php");
    } else {
      echo "更新失败";
    }
  } else {
    echo "上传图片发生错误";
  }
}
?>