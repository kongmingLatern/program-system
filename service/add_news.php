<?php
include_once '../config.php';
header("Content-type: text/html; charset=utf-8");
$target_dir = $_COOKIE["root_path"] . "/article_cover/" . date('Y-m-d') . "/";
$dir = "/article_cover/" . date('Y-m-d') . "/";
$fileId = 'cover';
$id = uniqid();

$article_name = $_POST["article_name"];
$category_name = $_POST["category_name"];
$article_content = $_POST["article_content"];
$desc = $_POST["desc"];

if (!file_exists($target_dir)) {
  mkdir($target_dir, 0777, true);
}

$imageFileType = pathinfo($_FILES[$fileId]["name"], PATHINFO_EXTENSION);
$suffix = time() . '.' . $imageFileType;
$target_file = $target_dir . $suffix;
$uploadOk = 1;

$cover = $dir . $suffix;

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
  echo "对不起，文章发布失败";
} else {
  $sql = "INSERT INTO article 
          VALUES('{$id}', '{$_COOKIE['uid']}', '{$article_name}', '{$category_name}','{$cover}', '{$article_content}', 0, now(), '{$desc}')";
  $result = $conn->query($sql);
  if (move_uploaded_file($_FILES[$fileId]["tmp_name"], $target_file)) {
    if ($result) {
      header("Location: ../index.php");
    } else {
      echo "更新失败";
    }
  } else {
    echo "上传图片发生错误";
  }
}
?>