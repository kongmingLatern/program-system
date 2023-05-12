<?php
include_once '../config.php';
$id = $_POST["id"];
$table = $_POST["table"];
$key = $_POST["key"];

$sql = "DELETE FROM {$table} WHERE {$key} = '{$id}'";

$result = $conn->query($sql);

if ($result) {
  echo json_encode([
    "code" => 200,
    "msg" => "删除成功"
  ]);
} else {
  echo json_encode([
    "code" => 400,
    "msg" => "删除失败"
  ]);
}
?>