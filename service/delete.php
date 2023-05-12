<?php
  include_once '../../config.php';
  $id = $_POST["id"];
  $table = $_POST["table"];

  $sql = "DELETE FROM {$table}  WHERE  = ?";

?>