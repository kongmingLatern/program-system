<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $dataUrl = $_POST['image'];
  list($type, $dataUrl) = explode(';', $dataUrl);
  list(, $dataUrl) = explode(',', $dataUrl);
  $dataUrl = base64_decode($dataUrl);

  $dirPath = $_COOKIE["root_path"] . '/images/';
  if (!file_exists($dirPath)) {
    mkdir($dirPath, 0777, true);
  }

  $filePath = $dirPath . uniqid() . '.png';
  file_put_contents($filePath, $dataUrl);

  // 返回图片URL
  echo 'http://localhost:3000/images/' . basename($filePath);
}
?>