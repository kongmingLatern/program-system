<?php
include_once './config.php';

if (isset($_POST['submit'])) {
  $title = $_POST['title'];
  $content = $_POST['content'];

  $sql = "INSERT INTO news (title, content) VALUES (?, ?)";
  $stmt = $conn->prepare($sql);
  $stmt->bind_param("ss", $title, $content);

  if ($stmt->execute()) {
    header("Location: index.php");
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

  $stmt->close();
}

$conn->close();
?>